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
    Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'HomeController@dashboard']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

    Route::get('create/slider', ['as' => 'web-settings.Homeslider.slider', 'uses' => 'TopSliderController@create']);
    Route::post('create/slider', ['as' => 'web-settings.Homeslider.slider', 'uses' => 'TopSliderController@store']);
    Route::get('show/slider/{id}', ['as' => 'web-settings.Homeslider.editslider', 'uses' => 'TopSliderController@show']);
	Route::put('update/slider/{id}', ['as' => 'web-settings.Homeslider.editslider', 'uses' => 'TopSliderController@update']);
	Route::delete('delete/slider/{id}', ['as' => 'web-settings.Homeslider.editslider', 'uses' => 'TopSliderController@destroy']);
	Route::patch('patch/slider/{id}', ['as' => 'web-settings.Homeslider.editslider', 'uses' => 'TopSliderController@MakeActive']);

	Route::get('create/stock', ['as' => 'web-settings.Homeslider.manageStock', 'uses' => 'StockController@create']);

	Route::get('update/contact', ['as' => 'web-settings.Contact.contact', 'uses' => 'ContactController@create']);
	Route::put('update/contact', ['as' => 'web-settings.Contact.contact', 'uses' => 'ContactController@update']);

	Route::get('update/about', ['as' => 'web-settings.About.about', 'uses' => 'AboutController@create']);
	Route::put('update/about', ['as' => 'web-settings.About.about', 'uses' => 'AboutController@update']);

	Route::get('update/team', ['as' => 'web-settings.OurTeam.teams', 'uses' => 'PartnerController@create']);
	Route::get('update/editors/pic', ['as' => 'web-settings.EditorPic.editorpic', 'uses' => 'EditorspicController@create']);
	Route::get('update/features', ['as' => 'web-settings.Features.feature', 'uses' => 'FirstFooterFeatureController@create']);
	Route::get('update/offerbox', ['as' => 'web-settings.offerbox.offer', 'uses' => 'OfferBoxController@create']);
	Route::get('update/home/timer', ['as' => 'web-settings.Hometimer.hometimer', 'uses' => 'MiddlePosterTimerController@create']);
	Route::get('manage/reviews', ['as' => 'web-settings.Review.reviews', 'uses' => 'ReviewController@create']);
    Route::get('manage/testimonials', ['as' => 'web-settings.Testimonials.testimonials', 'uses' => 'TestimonialController@create']);
    Route::get('manage/stock/categories', ['as' => 'stock-settings.categories.category', 'uses' => 'CategoryController@create']);
    Route::get('manage/stock/type', ['as' => 'stock-settings.type.type', 'uses' => 'TypeController@create']);
    Route::get('manage/stock/delivery', ['as' => 'stock-settings.delivery.delivery', 'uses' => 'DeliveryPlaceController@create']);
	Route::get('update/menu/items', ['as' => 'web-settings.Menu.menu', 'uses' => 'MenuController@create']);
});
