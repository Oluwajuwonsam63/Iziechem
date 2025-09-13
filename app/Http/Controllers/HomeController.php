<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('index' , compact('page_data'));
    }
}
