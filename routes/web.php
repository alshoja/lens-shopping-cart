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
Route::get('product/shop', 'SimpleHome@shop')->name('shop');
Route::get('/product/item/{id}', 'SimpleHome@item')->name('item');
Route::get('/about', 'SimpleHome@about')->name('about');
Route::get('/contact', 'SimpleHome@contact')->name('contact');
Route::get('product/checkout', 'SimpleHome@checkout')->name('checkout');
Route::get('product/payment', 'SimpleHome@payment')->name('payment');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
