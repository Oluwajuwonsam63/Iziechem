<?php

use Illuminate\Support\Facades\Route;

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
        $keywords = "paint production Nigeria, wall screeding, interior painting, exterior painting, decorative finishes, IZIECHEM";
        $description = "Welcome to IZIECHEM, Nigeria’s trusted provider of premium paint production, wall screeding, interior & exterior painting, and decorative finishes. We create smooth, beautiful, and lasting walls. We Give Life to Dead Walls";
        $page_data = ['title' => $title, 'keywords' => $keywords, 'description' => $description];
    return view('index', compact('page_data'));
});

Route::post('/contact/send', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

// navbar routes
Route::get('/about', [App\Http\Controllers\WebController::class, 'about'])->name('about');
Route::get('/service', [App\Http\Controllers\CategoriesController::class, 'service'])->name('all_service');
Route::get('/project', [App\Http\Controllers\WebController::class, 'project'])->name('project');
Route::get('/shop', [App\Http\Controllers\WebController::class, 'shop'])->name('shop');
Route::get('/updates', [App\Http\Controllers\WebController::class, 'updates'])->name('updates');
Route::get('/contact', [App\Http\Controllers\WebController::class, 'contact'])->name('contact');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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

// Posts Route
Route::get('/posts', [App\Http\Controllers\PostsController::class, 'index'])->name('all_posts');
Route::get('/posts/{post}/edit', [App\Http\Controllers\PostsController::class, 'edit'])->name('edit_posts');
Route::get('/posts/create', [App\Http\Controllers\PostsController::class, 'create'])->name('create_posts');
Route::post('/posts/create', [App\Http\Controllers\PostsController::class, 'store'])->name('store_posts');
Route::post('/posts/{post}/update', [App\Http\Controllers\PostsController::class, 'update'])->name('update_posts');
Route::get('/posts/{id}/delete',[App\Http\Controllers\PostsController::class,'destroy'])->name('delete_posts');
Route::get('/posts/{id}/details',[App\Http\Controllers\PostsController::class,'show'])->name('show_posts');
});
