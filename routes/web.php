<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;


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

Route::get('/', function () {return view('user.index');})->name('home');

// -----------login

Route::get('login', [logincontroller::class,'index'])->name('login');
Route::get('signup', [logincontroller::class,'signup'])->name('signup');
