<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Categories;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);

        // Share categories with all views to avoid 'undefined variable $categories' in layouts
        try {
            // Cache categories for 60 minutes to avoid querying DB on every request (improves performance)
            $cats = Cache::remember('shared_categories', 60, function () {
                return Categories::orderBy('created_at', 'desc')->get();
            });
            View::share('categories', $cats);
        } catch (\Throwable $e) {
            // If the categories table doesn't exist yet (migrations not run) or another error occurs,
            // share an empty collection to prevent undefined variable errors in views.
            View::share('categories', collect([]));
        }

        // bootstrap5
        Paginator::useBootstrap();
    }

    public function search(Request $request)
    {
            $title = "Updates & Tips | Painting & Interior Design Trends – IZIECHEM";
            $keywords = "painting tips Nigeria, interior design updates, wall decoration blog, IZIECHEM news";
            $description = "Stay updated with the latest painting trends, wall design ideas, and interior decoration tips. Read helpful guides and news from IZIECHEM.";
            $page_data = ['title' => $title, 'keywords' => $keywords, 'description' => $description];

            $query = $request->input('query');
            $posts = Posts::where('title', 'LIKE', '%' . $query . '%')
                            ->orwhere('description', 'LIKE', '%' . $query . '%')
                            ->get();
            
            $latestposts = posts::latest()->take(3)->get();
        return view('posts.updates', compact('query', 'posts', 'page_data', 'latestposts'));
    }
}
