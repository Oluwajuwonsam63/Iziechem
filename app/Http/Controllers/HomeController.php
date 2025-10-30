<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testifiers;
use App\Models\categories;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
            $title = "IZIECHEM | Admin Dashboard";
            $keywords = "admin dashboard, manage posts, manage categories, user messages, IZIECHEM admin";
            $description = "Welcome to the IZIECHEM Admin Dashboard. Here you can manage blog posts, categories, and view user messages. Stay organized and keep your content updated with ease.";
            $page_data = ['title' => $title, 'keywords' => $keywords, 'description' => $description];

            $testifiers = Testifiers::all();
            $categories = categories::all();
        return view('dashboard' , compact('page_data', 'testifiers', 'categories'));
    }
}
