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
    return view('pages.terms-policy');
});


Route::get('/privacy', function () {
    return view('[pages.privacy-policy');
});


Route::get('/register', function () {
    return view('pages.register');
});

Route::get('/wishlist', function () {
    return view('pages.wishlist');
});


Route::get('/shop', function () {
    return view('pages.shop');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/product/{id}', function ($id=null) {
    return view('pages.product-detail');
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



//functions
// Route::get('/search', function () {
//     return $_REQUEST['q'];
// });
// Route::get('/search/{s}', function ($s) {
    
//     return $_REQUEST['q'];
// });

Route:: get('/dummy', function(){
    $label = \App\Models\ProductLabel::first();
    $product = \App\Models\Product::first();

    // manual way to add new 
    $product->labels()->attach($label);

    //manual way to update
    $product->labels()->detach(2);
    $product->labels()->attach([3,2]);

    //better way is to sync
    $product->labels()->sync([4,6]);
    $product->labels()->sync([2,6]);


});