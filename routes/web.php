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

Route::get('/', 'SimpleHome@index');
Route::get('product/shop', 'SimpleHome@shop')->name('shop');
Route::get('product/shop/price', 'SimpleHome@search');
Route::get('/product/item/{id}', 'SimpleHome@item')->name('item');
Route::get('/product/shop/cat/{id}', 'SimpleHome@star')->name('shop');
Route::get('/about', 'SimpleHome@about')->name('about');
Route::get('/contact', 'SimpleHome@contact')->name('contact');
Route::get('product/payment', 'SimpleHome@payment')->name('payment');
Route::get('/search','DeliveryPlaceController@search');

Route::get('/admin', 'admin\AdminController@login')->name('admin');
Route::get('/admin/register', 'admin\AdminController@register')->name('admin');

Auth::routes();
Route::get('/home', 'SimpleHome@index')->name('home');
Route::get('product/checkout', 'SimpleHome@checkout')->name('checkout');

Route::group(['middleware' => 'isadmin'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});
