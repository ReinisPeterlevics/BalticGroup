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

Route::get('/search/{query}', function (string $query) {
    return view('search', ['query' => $query])->name('search');
})->name('search');

Route::get('/destination/{id}', function (string $id) {
    return view('destination', ['id' => $id])->name('destination');
})->name('destination');

Route::get('/location-description', function () {
    return view('location-description');
})->name('location-description');

Route::get('/location', function () {
    return view('location');
})->name('location');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
