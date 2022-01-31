<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
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

Route::get('/', [FrontendController::class, 'home'])->name('frontend.home');
Route::get('/blog/{slug}', [FrontendController::class, 'showPost'])->name('blogPost');
Route::get('/blog/category/{slug}', [FrontendController::class, 'postCategory'])->name('post.category');
Route::get('/blog/tag/{slug}', [FrontendController::class, 'postTag'])->name('post.tag');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('post', PostController::class);

Route::resource('category', CategoryController::class);

Route::resource('tag', TagController::class);
