<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Posts;
use App\Models\Testifiers;

class WebController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    public function about()
    {
            $title = "About Us | IZIECHEM – Experts in Painting & Screeding";
            $keywords = "about IZIECHEM, painting company Nigeria, professional wall screeding, interior services Nigeria";
            $description = "Learn more about IZIECHEM, a leading name in painting, screeding, and interior decoration. We are dedicated to delivering quality wall designs and premium paint products in Nigeria.";
            $page_data = ['title' => $title, 'keywords' => $keywords, 'description' => $description];

            $testifiers = Testifiers::all();
        return view('about', compact('page_data', 'testifiers'));
    }
    public function services()
    {
            $title = "Our Services | IZIECHEM – Premium Paints & Wall Designs";
            $keywords = "IZIECHEM services, paint production Nigeria, wall screeding, interior painting, exterior painting, decorative finishes";
            $description = "Discover the range of services offered by IZIECHEM, including high-quality paint production, expert wall screeding, and exceptional interior and exterior painting solutions. We bring life to your walls with our decorative finishes.";
            $page_data = ['title' => $title, 'keywords' => $keywords, 'description' => $description];
        
            $categories = Categories::all();
        return view('services', compact('page_data', 'categories'));
    }
    public function project()
    {
            $title = "Recent Projects | Quality Wall Designs & Interior Services – IZIECHEM";
            $keywords = "painting projects Nigeria, completed wall designs, interior decoration samples, IZIECHEM portfolio";
            $description = "Browse our completed projects in painting, wall screeding, and interior design. Each project showcases IZIECHEM’s dedication to beauty, quality, and customer satisfaction.";
            $page_data = ['title' => $title, 'keywords' => $keywords, 'description' => $description];
        return view('project', compact('page_data'));
    }
    public function shop()
    {
            $title = "Shop | Premium Paints, Wallpapers & Interior Products – IZIECHEM";
            $keywords = "buy paint Nigeria, emulsion paint, satin paint, gloss paint, tex coat, wallpapers Nigeria, interior products";
            $description = "Shop high-quality paint products including emulsion, satin, gloss, and tex coat. Discover wallpapers, blinds, and other interior solutions from IZIECHEM.";
            $page_data = ['title' => $title, 'keywords' => $keywords, 'description' => $description];
        return view('shop', compact('page_data'));
    }
    public function updates()
    {
            $title = "Updates & Tips | Painting & Interior Design Trends – IZIECHEM";
            $keywords = "painting tips Nigeria, interior design updates, wall decoration blog, IZIECHEM news";
            $description = "Stay updated with the latest painting trends, wall design ideas, and interior decoration tips. Read helpful guides and news from IZIECHEM.";
            $page_data = ['title' => $title, 'keywords' => $keywords, 'description' => $description];

            $posts = Posts::all();
        return view('posts.updates', compact('page_data', 'posts'));
    }
    public function contact()
    {
            $title = "Contact Us | IZIECHEM – Get in Touch for Quality Paints & Services";
            $keywords = "contact IZIECHEM, paint services Nigeria, wall screeding contact, interior painting inquiry";
            $description = "Reach out to IZIECHEM for inquiries about our premium paint products and expert wall screeding services. We are here to assist you with all your painting and decorative finish needs in Nigeria.";
            $page_data = ['title' => $title, 'keywords' => $keywords, 'description' => $description];
        return view('contact', compact('page_data')); 
    }
}
