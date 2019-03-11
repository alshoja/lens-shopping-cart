<?php

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

Route::get('/', 'SimpleHome@index')->name('home');
Route::get('/shop', 'SimpleHome@shop')->name('shop');
Route::get('/item', 'SimpleHome@item')->name('item');
Route::get('/about', 'SimpleHome@about')->name('about');
Route::get('/contact', 'SimpleHome@contact')->name('contact');
Route::get('/checkout', 'SimpleHome@checkout')->name('checkout');
Route::get('/payment', 'SimpleHome@payment')->name('payment');


Route::get('/item', function () {
    return view('item');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
