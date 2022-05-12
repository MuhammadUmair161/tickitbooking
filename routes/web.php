<?php

use App\Http\Controllers\aboutsController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\movieCotroller;
use App\Http\Controllers\profileController;

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

// -----------login
Auth::routes();
//-----------home
Route::get('/', [homeController::class, 'trending'])->name('home');
Route::get('dashboard', [dashboardController::class, 'index'])->name('dashboard');

// ----abouts
Route::get('abouts', [aboutsController::class, 'index'])->name('abouts');

// ----contact
Route::get('contact', [contactController::class, 'index'])->name('contact');

// -----------profile
Route::get('profile-create', [profileController::class, 'create'])->name('profile-create');
Route::post('profile-save', [profileController::class, 'save'])->name('profile-save');
Route::get('profile/{id}', [profileController::class, 'index'])->name('profile');
Route::post('profile-edit/{id}', [profileController::class, 'edit'])->name('profile-edit');

// -----------Movie
Route::get('movie', [movieCotroller::class, 'list'])->name('m-list');
Route::get('movie-ticketPlan/{id}', [movieCotroller::class, 'ticketPlan'])->name('m-ticketPlan');
Route::get('movie-detail/{id}', [movieCotroller::class, 'detail'])->name('m-detail');
// -----------Blog
Route::get('blog', [blogController::class, 'post'])->name('blog');
Route::get('blog-detail/{id}', [blogController::class, 'detail'])->name('blog-detail');

route::prefix('admin')->group(function () {
    // -----------Movie
    Route::get('movie-create', [movieCotroller::class, 'index'])->name('m-create');
    Route::post('movie-submit', [movieCotroller::class, 'submit'])->name('m-submit');
    Route::get('movie-edit/{id}', [movieCotroller::class, 'edit'])->name('m-edit');
    Route::post('movie-update/{id}', [movieCotroller::class, '_update'])->name('m-update');
    Route::get('movie-delete/{id}', [movieCotroller::class, 'delete'])->name('m-delete');
    // -----------Blog
    Route::get('blog-create', [blogController::class, 'index'])->name('blog-create');
    Route::post('blog-submit', [blogController::class, 'submit'])->name('blog-submit');
    Route::get('blog-delete/{id}', [blogController::class, 'delete'])->name('blog-delete');
});
