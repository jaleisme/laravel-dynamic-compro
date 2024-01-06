<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AlasanController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\FooterLinkController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\ProjectCategoryController;
use App\Http\Controllers\ProjectController;
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

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/about', [LandingController::class, 'about'])->name('about');
Route::get('/projects', [LandingController::class, 'projects'])->name('projects');
Route::get('/blogs', [LandingController::class, 'blogs'])->name('blogs');
Route::get('/blog/read/{id}', [LandingController::class, 'blog_read'])->name('blog-read');

Auth::routes();

Route::group(['prefix'=>'admin', 'middleware' => 'auth'], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/hero', HeroController::class);
    Route::resource('/alasan', AlasanController::class);
    Route::resource('/layanan', LayananController::class);
    Route::resource('/client', ClientController::class);
    Route::resource('/gallery', GalleryController::class);
    Route::resource('/maps', MapsController::class);
    Route::resource('/about', AboutController::class);
    Route::resource('/project-category', ProjectCategoryController::class);
    Route::resource('/project', ProjectController::class);
    Route::resource('/blog-category', BlogCategoryController::class);
    Route::resource('/blog', BlogController::class);
    Route::resource('/footer', FooterController::class);
    Route::put('/footer-link/{id}', [FooterController::class, 'editLink'])->name('edit-link');
});
