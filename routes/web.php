<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/login1', function () {
    return view('login1');
})->name('login1');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/location-list',
    'App\Http\Controllers\LocationController@index'
)->name('location');

Route::get('/location/random',
    'App\Http\Controllers\LocationController@random'
)->name('location-random');

Route::get('/location/{id}',
    'App\Http\Controllers\LocationController@show'
)->name('location-description');

// Auth::routes();

Route::get('/location', 'App\Http\Controllers\LocationController@show')->name('location-description');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/checkout', [App\Http\Controllers\OrderController::class, 'index'])->name('checkout');
