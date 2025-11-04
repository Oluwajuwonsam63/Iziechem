<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testifiers;
use App\Models\teams;
use App\Models\projects;
use App\Models\Categories;
use App\Models\Posts;

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

            $testifiers = testifiers::latest()->take(5)->get();
        $categories = Categories::latest()->take(4)->get();
        $teams = teams::oldest()->take(3)->get();
        $posts = Posts::latest()->take(2)->get();

        return view('index', compact('page_data', 'testifiers', 'categories', 'teams', 'posts'));
    }
}
