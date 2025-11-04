<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\SupportTicket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class ChatbotController extends Controller
{
    // Main chat endpoint -> call OpenAI and return reply
    public function message(Request $request)
    {
        $request->validate(['message' => 'required|string']);

        $user = $request->user();
        $userLabel = $user ? ($user->name . " (id:{$user->id})") : 'Guest';

        // Build the messages array for Chat API
        $messages = [
            ['role' => 'system', 'content' => 'You are a helpful assistant integrated into a Laravel web app. Keep answers short and friendly.'],
            ['role' => 'user', 'content' => "User: {$userLabel}\n\nQuestion: {$request->message}"]
        ];

        // Log incoming chatbot request for debugging (no secrets)
        Log::info('Chatbot incoming message', ['user' => $userLabel, 'message' => $request->message]);

        // Determine API key
        $apiKey = config('services.openai.key') ?: env('OPENAI_API_KEY');
        if (empty($apiKey)) {
            Log::error('Chatbot missing OpenAI API key');
            return response()->json([
                'error' => 'missing_api_key',
                'message' => 'OPENAI_API_KEY is not configured on the server.'
            ], 500);
        }

        // Prefer a local CA bundle if available (recommended for Windows dev setups)
        $cacertPath = storage_path('certs/cacert.pem');
        $verifyOption = true;
        if (File::exists($cacertPath)) {
            $verifyOption = $cacertPath;
        } elseif (app()->environment('local')) {
            // In local dev, if no cacert is present, allow disabling verification to avoid cURL 60.
            // NOTE: This is only for local development. Do NOT disable in production.
            $verifyOption = false;
        }

        try {
            // If the OpenAI Laravel facade is available, attempt to use it (non-breaking fallback)
            if (class_exists('\\OpenAI\\Laravel\\Facades\\OpenAI') || class_exists('OpenAI\\Laravel\\Facades\\OpenAI')) {
                try {
                    // Use the HTTP fallback under the hood but keep this attempt for users who installed the SDK
                    $client = \OpenAI\Laravel\Facades\OpenAI::client($apiKey);
                    // Some SDKs don't accept a verify option easily; fall back to Http if necessary
                    $chatResponse = $client->chat()->create([
                        'model' => 'gpt-3.5-turbo',
                        'messages' => $messages,
                        'temperature' => 0.2,
                        'max_tokens' => 400,
                    ]);

                    $reply = data_get($chatResponse, 'choices.0.message.content') ?? data_get($chatResponse, 'choices.0.text');
                    Log::info('Chatbot reply (OpenAI SDK)', ['reply' => $reply]);
                    return response()->json(['reply' => trim($reply ?? 'Sorry — no reply was returned.')]);
                } catch (\Throwable $inner) {
                    // If SDK fails (for example because of SSL options), log and fall through to Http client
                    Log::warning('OpenAI SDK call failed, falling back to Http', ['message' => $inner->getMessage()]);
                }
            }

            // Fallback: use Laravel Http (Guzzle) with token and verify option
            $response = Http::withToken($apiKey)
                ->withOptions(['verify' => $verifyOption])
                ->post('https://api.openai.com/v1/chat/completions', [
                    'model' => 'gpt-3.5-turbo',
                    'messages' => $messages,
                    'temperature' => 0.2,
                    'max_tokens' => 400,
                ]);

            if ($response->failed()) {
                $status = $response->status();
                $body = $response->body();
                Log::error('OpenAI API call failed', ['status' => $status, 'body' => $body]);

                // Try to classify the error for clearer frontend messages
                if ($status === 401 || stripos($body, 'invalid_api_key') !== false) {
                    return response()->json(['error' => 'invalid_api_key', 'message' => 'The provided OpenAI API key is invalid (401).'], 401);
                }

                // Propagate rate-limit / quota errors back to the client so the UI can show a clear message
                if ($status === 429) {
                    return response()->json([
                        'error' => 'rate_limited',
                        'message' => 'OpenAI returned a rate-limit / quota error (429). Please check your OpenAI account billing and usage.',
                        'detail' => $body,
                    ], 429);
                }

                return response()->json(['error' => 'ai_service_unavailable', 'message' => 'Sorry — I could not reach the AI service.'], 502);
            }

            $json = $response->json();
            $reply = data_get($json, 'choices.0.message.content') ?? data_get($json, 'choices.0.text');
            Log::info('Chatbot reply', ['reply' => $reply]);
            return response()->json(['reply' => trim($reply ?? 'Sorry — no reply was returned.')]);
        } catch (\Throwable $e) {
            $msg = $e->getMessage();
            Log::error('Chatbot exception', ['message' => $msg, 'trace' => $e->getTraceAsString()]);

            // Heuristic classification of common causes
            if (stripos($msg, 'cURL error 60') !== false || stripos($msg, 'SSL certificate') !== false || stripos($msg, 'SSL') !== false) {
                return response()->json(['error' => 'ssl_error', 'message' => 'SSL certificate verification failed when contacting the AI service.'], 502);
            }

            if (stripos($msg, 'Could not resolve host') !== false || stripos($msg, 'Connection timed out') !== false) {
                return response()->json(['error' => 'network_error', 'message' => 'Network error when contacting AI service (DNS or connectivity).'], 502);
            }

            return response()->json(['error' => 'unknown_error', 'message' => 'Error contacting AI service: ' . $msg], 500);
        }
    }

    // Create a support ticket (escalation)
    public function escalate(Request $request)
    {
        $request->validate(['message' => 'nullable|string']);

        $user = $request->user();

        $ticket = SupportTicket::create([
            'user_id' => $user ? $user->id : null,
            'subject' => 'Chatbot Escalation',
            'message' => $request->input('message', 'User requested human assistance via chatbot.'),
            'status' => 'open',
        ]);

        // OPTIONAL: notify admin by email here (Mail::to(...)->send(...))

        return response()->json([
            'status' => 'success',
            'message' => 'Escalation received. A human agent will contact you soon.',
            'ticket_id' => $ticket->id,
        ]);
    }
}
