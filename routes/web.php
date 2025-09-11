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
Route::get('/services', [App\Http\Controllers\WebController::class, 'services'])->name('services');
Route::get('/project', [App\Http\Controllers\WebController::class, 'project'])->name('project');
Route::get('/shop', [App\Http\Controllers\WebController::class, 'shop'])->name('shop');
Route::get('/updates', [App\Http\Controllers\WebController::class, 'updates'])->name('updates');
Route::get('/contact', [App\Http\Controllers\WebController::class, 'contact'])->name('contact');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function() {
    Route::get('/messages', [App\Http\Controllers\ContactController::class, 'index'])->name('messages');
});

