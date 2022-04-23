<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\movieCotroller;

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

Route::get('/', [homeController::class,'trending'])->name('home');
// Route::get('/movie', function () {return view('user.movie.index');})->name('movie');
Route::get('/dashboard', function () {return view('admin.index');})->name('dashboard');

// -----------login
Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('login', [logincontroller::class,'index'])->name('login');
// Route::get('signup', [logincontroller::class,'signup'])->name('signup');

// -----------Movie
Route::get('movie', [movieCotroller::class,'list'])->name('m-list');
Route::get('movie-ticketPlan/{id}', [movieCotroller::class,'ticketPlan'])->name('m-ticketPlan');
Route::get('movie-detail/{id}', [movieCotroller::class,'detail'])->name('m-detail');
Route::get('movie-create', [movieCotroller::class,'index'])->name('m-create');
Route::post('movie-submit', [movieCotroller::class,'submit'])->name('m-submit');

