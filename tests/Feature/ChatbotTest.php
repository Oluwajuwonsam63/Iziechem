<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\SupportTicket;

class ChatbotTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function chatbot_message_requires_authentication()
    {
        $response = $this->postJson('/chatbot/message', ['message' => 'Hello']);

        $response->assertStatus(401); // Unauthorized
    }

    /** @test */
    public function chatbot_can_send_message()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        // Mock OpenAI response since we can't test real API
        $this->mock(\OpenAI\Client::class, function ($mock) {
            $mock->shouldReceive('chat->create')
                ->andReturn((object) [
                    'choices' => [
                        (object) [
                            'message' => (object) [
                                'content' => 'Hello! How can I help you today?'
                            ]
                        ]
                    ]
                ]);
        });

        $response = $this->postJson('/chatbot/message', ['message' => 'Hello']);

        $response->assertStatus(200)
                ->assertJson(['reply' => 'Hello! How can I help you today?']);
    }

    /** @test */
    public function chatbot_escalation_creates_ticket()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->postJson('/chatbot/escalate', ['message' => 'Need human help']);

        $response->assertStatus(200)
                ->assertJson([
                    'status' => 'success',
                    'message' => 'Escalation received. A human agent will reach out shortly.',
                ]);

        $this->assertDatabaseHas('support_tickets', [
            'user_id' => $user->id,
            'subject' => 'Chatbot Escalation',
            'message' => 'Need human help',
            'status' => 'open',
        ]);
    }

    /** @test */
    public function admin_can_view_tickets()
    {
        $admin = User::factory()->create(['is_admin' => true]);
        $user = User::factory()->create();
        SupportTicket::factory()->create(['user_id' => $user->id]);

        $this->actingAs($admin);

        $response = $this->get('/admin/tickets');

        $response->assertStatus(200)
                ->assertSee('Support Tickets');
    }
}
