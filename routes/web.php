<?php

use Illuminate\Support\Facades\Route;
use App\Models\testifiers;
use App\Models\teams;
use App\Models\projects;
use App\Models\Categories;
use App\Models\Posts;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\UploadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
        $title = "IZIECHEM | Quality Paint Production & Wall Design in Nigeria";
        $keywords = "paint production Nigeria, wall screeding, interior painting, exterior painting, decorative finishes, IZIECHEM, Feature wall wallpaper, textured wallpaper, geometric pattern wallpaper, floral wallpaper, modern wallpaper, custom mural wallpaper, peel and stick wallpaper, vinyl wallpaper, removable wallpaper, eco-friendly wallpaper, living room wallpaper, bedroom accent wall, bathroom wallpaper, matte finish paint, eggshell paint, satin paint, semi-gloss paint, low VOC paint, washable paint, accent wall colors, color blocking, ombre walls, neutral color schemes, modern farmhouse painting, Scandinavian colors, exterior wall cladding, brick veneer, stone facade, wood siding, vinyl siding, stucco finishing, weatherproof paint, anti-fade paint, mold-resistant coating, waterproof paint, masonry paint, wood stain, modern exterior colors, traditional house colors, colonial painting, monochromatic exteriors, professional installation, custom murals, commercial painting, exterior painting services, wallpaper removal, color consultation, eco-friendly contractors, damaged walls repair, small room solutions, dark room brightening, moisture problems, fading solutions, peeling paint repair, local installers, painting contractors, residential painting, commercial installation, exterior companies, zero VOC paint, sustainable wallpaper, recycled materials, natural fibers, smart wallpaper, removable wallpaper, texture-enhanced, color-changing paint, thermal insulation, sound-absorbing, designer wallpaper, custom prints, hand-painted finishes, luxury vinyl, high-end paint, color consultation";
        $description = "Welcome to IZIECHEM, Nigeria’s trusted provider of premium paint production, wall screeding, interior & exterior painting, and decorative finishes. We create smooth, beautiful, and lasting walls. We Give Life to Dead Walls";
        $page_data = ['title' => $title, 'keywords' => $keywords, 'description' => $description];

        $testifiers = testifiers::latest()->take(5)->get();
        $categories = Categories::all();
        $teams = teams::oldest()->take(3)->get();
        $posts = Posts::latest()->take(2)->get();

    return view('index', compact('page_data', 'testifiers', 'categories', 'teams', 'posts'));
});

Route::post('/contact/send', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

// navbar routes
Route::get('/about', [App\Http\Controllers\WebController::class, 'about'])->name('about');
Route::get('/service', [App\Http\Controllers\WebController::class, 'services'])->name('services');
Route::get('/project', [App\Http\Controllers\WebController::class, 'project'])->name('project');
Route::get('/shop', [App\Http\Controllers\WebController::class, 'shop'])->name('shop');
Route::get('/updates', [App\Http\Controllers\WebController::class, 'updates'])->name('updates');
Route::get('/updates/{category_name}', [App\Http\Controllers\WebController::class, 'list'])->name('list_updates');
Route::get('/search', [App\Http\Controllers\WebController::class, 'search'])->name('search');
Route::get('/allsearch', [App\Http\Controllers\WebController::class, 'allsearch'])->name('all_search');
Route::get('/searchs', [App\Http\Controllers\WebController::class, 'searchs'])->name('searchs');
Route::get('/contact', [App\Http\Controllers\WebController::class, 'contact'])->name('contact');

//No Result found
Route::get('/no-result', [App\Http\Controllers\WebController::class, 'noresult'])->name('no_result');
Route::get('/no-result', [App\Http\Controllers\WebController::class, 'noresult'])->name('no_result');
Route::get('/404', [App\Http\Controllers\WebController::class, 'notfound'])->name('not_found');



//Teams routes
Route::get('/teams', [App\Http\Controllers\TeamsController::class, 'teams'])->name('teams');
Route::get('/teams/{id}info', [App\Http\Controllers\TeamsController::class, 'info'])->name('info_teams');
Route::get('/projects', [App\Http\Controllers\ProjectsController::class, 'projects'])->name('projects');
Route::get('/categories/{id}/info', [App\Http\Controllers\CategoriesController::class, 'info'])->name('info_category');
Route::get('/posts/{id}/info', [App\Http\Controllers\PostsController::class, 'info'])->name('info_posts');

//Subscribers
Route::post('/subscribe', [App\Http\Controllers\SubscribersController::class, 'store'])->name('store_subscribe');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Google OAuth Routes
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

// Chatbot endpoints (protected with auth middleware)
Route::middleware(['auth'])->group(function() {
    Route::post('/chatbot/message', [App\Http\Controllers\ChatbotController::class, 'message'])->name('chatbot.message');
    Route::post('/chatbot/escalate', [App\Http\Controllers\ChatbotController::class, 'escalate'])->name('chatbot.escalate');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'is_admin']], function() {
Route::get('/messages', [App\Http\Controllers\ContactController::class, 'index'])->name('messages');

// Categories Route
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categories', [App\Http\Controllers\CategoriesController::class, 'index'])->name('all_categories');
Route::get('/categories/{category}/edit', [App\Http\Controllers\CategoriesController::class, 'edit'])->name('edit_category');
Route::get('/categories/create', [App\Http\Controllers\CategoriesController::class, 'create'])->name('create_category');
Route::post('/categories/create', [App\Http\Controllers\CategoriesController::class, 'store'])->name('store_category');
Route::post('/categories/{category}/update', [App\Http\Controllers\CategoriesController::class, 'update'])->name('update_category');
Route::get('/categories/{id}/delete', [App\Http\Controllers\CategoriesController::class, 'destroy'])->name('delete_category');
Route::get('/categories/{id}/details', [App\Http\Controllers\CategoriesController::class, 'show'])->name('show_category');
Route::get('/categories/{category_name}', [App\Http\Controllers\CategoriesController::class, 'list'])->name('list_category');

// Posts Route
Route::get('/posts', [App\Http\Controllers\PostsController::class, 'index'])->name('all_posts');
Route::get('/posts/{post}/edit', [App\Http\Controllers\PostsController::class, 'edit'])->name('edit_posts');
Route::get('/posts/create', [App\Http\Controllers\PostsController::class, 'create'])->name('create_posts');
Route::post('/posts/create', [App\Http\Controllers\PostsController::class, 'store'])->name('store_posts');
Route::post('/posts/{post}/update', [App\Http\Controllers\PostsController::class, 'update'])->name('update_posts');
Route::get('/posts/{id}/delete',[App\Http\Controllers\PostsController::class,'destroy'])->name('delete_posts');
Route::get('/posts/{id}/details',[App\Http\Controllers\PostsController::class,'show'])->name('show_posts');

// Testimonial Route
Route::get('/testimonials', [App\Http\Controllers\TestifiersController::class, 'index'])->name('all_testifiers');
Route::get('/testimonials/{testifier}/edit', [App\Http\Controllers\TestifiersController::class, 'edit'])->name('edit_testifiers');
Route::get('/testimonials/create', [App\Http\Controllers\TestifiersController::class, 'create'])->name('create_testifiers');
Route::post('/testimonials/create', [App\Http\Controllers\TestifiersController::class, 'store'])->name('store_testifiers');
Route::post('/testimonials/{testifier}/update', [App\Http\Controllers\TestifiersController::class, 'update'])->name('update_testifiers');
Route::get('/testimonials/{id}/delete',[App\Http\Controllers\TestifiersController::class,'destroy'])->name('delete_testifiers');
Route::get('/testimonials/{id}/details',[App\Http\Controllers\TestifiersController::class,'show'])->name('show_testifiers');

// Teams Route
Route::get('/teams', [App\Http\Controllers\TeamsController::class, 'index'])->name('all_teams');
Route::get('/teams/{team}/edit', [App\Http\Controllers\TeamsController::class, 'edit'])->name('edit_teams');
Route::get('/teams/create', [App\Http\Controllers\TeamsController::class, 'create'])->name('create_teams');
Route::post('/teams/create', [App\Http\Controllers\TeamsController::class, 'store'])->name('store_teams'); 
Route::post('/teams/{team}/update', [App\Http\Controllers\TeamsController::class, 'update'])->name('update_teams');
Route::get('/teams/{id}/delete',[App\Http\Controllers\TeamsController::class,'destroy'])->name('delete_teams');
Route::get('/teams/{id}/details',[App\Http\Controllers\TeamsController::class,'show'])->name('show_teams');

// Projects Route
Route::get('/projects', [App\Http\Controllers\ProjectsController::class, 'index'])->name('all_projects');
Route::get('/projects/{project}/edit', [App\Http\Controllers\ProjectsController::class, 'edit'])->name('edit_projects');
Route::get('/projects/create', [App\Http\Controllers\ProjectsController::class, 'create'])->name('create_projects');
Route::post('/projects/create', [App\Http\Controllers\ProjectsController::class, 'store'])->name('store_projects'); 
Route::post('/projects/{project}/update', [App\Http\Controllers\ProjectsController::class, 'update'])->name('update_projects');
Route::get('/projects/{id}/delete',[App\Http\Controllers\ProjectsController::class,'destroy'])->name('delete_projects');
Route::get('/projects/{id}/details',[App\Http\Controllers\ProjectsController::class,'show'])->name('show_projects');

// Chatbot Route (admin area) -- removed to keep public endpoints singular

});

//CKEditor imageupload
Route::post('/upload-image', [UploadController::class, 'store']);
