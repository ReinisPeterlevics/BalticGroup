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

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/location-list', 'App\Http\Controllers\LocationController@index')->name('location');

Route::get('/location', 'App\Http\Controllers\LocationController@show')->name('location-description');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/cart/add{location_id}', 'App\Http\Controllers\CartController@addToCart')->name('card.add');
Route::get('/cart', 'App\Http\Controllers\CartController@showCart')->name('card.show');
