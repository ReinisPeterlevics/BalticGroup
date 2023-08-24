<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BlogController;

// use App\Http\Controllers\OrderController;
// use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/',
    'App\Http\Controllers\HomeController@index'
)->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blog',
    [BlogController::class, 'index']
)->name('blog');

Route::get('/blog-detail', function () {
    return view('blog-detail');
})->name('blog-detail');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/location-list',
    'App\Http\Controllers\LocationController@index'
)->name('location');

Route::post('/location-list',
    'App\Http\Controllers\LocationController@index'
)->name('search');

Route::get('/location/random',
    'App\Http\Controllers\LocationController@random'
)->name('location-random');

Route::get('/location/{id}',
    'App\Http\Controllers\LocationController@show'
)->name('location-description');

Route::get('/home',
    [App\Http\Controllers\HomeController::class, 'index']
)->name('home');

Route::get('/checkout',
    [App\Http\Controllers\OrderController::class, 'fillData']
)->name('fill-data');

Route::post('/checkout',
    [App\Http\Controllers\OrderController::class, 'saveOrder']
)->name('save-order');

Route::post('/add-to-cart/{id}',
    'App\Http\Controllers\CartController@add'
)->name('add-to-cart');

Route::post('/update-cart-quantity/{id}',
    'App\Http\Controllers\CartController@updateQuantity'
)->name('update-cart-quantity');
