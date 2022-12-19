<?php

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

Route::get('/', function () {
    return view('pages.welcome');
});

Route::get('/dashboard', function () {
    return view('index');
});

Route::get('/toc', function () {
    return view('terms-conditions');
});


Route::get('/privacy', function () {
    return view('privacy-policy');
});


Route::get('/register', function () {
    return view('pages.register');
});


Route::get('/shop', function () {
    return view('pages.shop');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/checkout', function () {
    return view('pages.checkout');
});

Route::get('/cart', function () {
    return view('pages.cart');
});

Route::get('/about', function () {
    return view('pages.about');
});
