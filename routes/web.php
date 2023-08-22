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
Route::get('/location/random', 'App\Http\Controllers\LocationController@random')->name('location-random');
Route::get('/location/{id}', 'App\Http\Controllers\LocationController@show')->name('location-description');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/cart/add/{id}', 'App\Http\Controllers\CartController@addToCart')->name('cart.add');
Route::get('/cart/displayCart', 'App\Http\Controllers\CartController@displayCart')->name('displayCart');
Route::post('/cart/updateItemQuantity', 'App\Http\Controllers\CartController@showCart')->name('cart.updateItemQuantity');
Route::get('/cart/deleteItem', 'App\Http\Controllers\CartController@showCart')->name('cart.deleteItem');



