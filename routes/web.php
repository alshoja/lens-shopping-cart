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
	Route::patch('patch/slider/{id}', ['as' => '', 'uses' => 'TopSliderController@MakeActive']);

	Route::get('create/stock', ['as' => 'web-settings.Homeslider.manageStock', 'uses' => 'StockController@create']);
	Route::post('store/stock', ['as' => '', 'uses' => 'StockController@store']);

	Route::get('update/contact', ['as' => 'web-settings.Contact.contact', 'uses' => 'ContactController@create']);
	Route::put('update/contact', ['as' => 'web-settings.Contact.contact', 'uses' => 'ContactController@update']);

	Route::get('update/about', ['as' => 'web-settings.About.about', 'uses' => 'AboutController@create']);
	Route::put('update/about', ['as' => 'web-settings.About.about', 'uses' => 'AboutController@update']);

	Route::get('update/team', ['as' => 'web-settings.OurTeam.teams', 'uses' => 'PartnerController@create']);
	Route::get('show/team/{id}', ['as' => 'web-settings.OurTeam.editteam', 'uses' => 'PartnerController@show']);
	Route::put('patch/team/{id}', ['as' => 'web-settings.OurTeam.editteam', 'uses' => 'PartnerController@update']);
	Route::post('store/team', ['as' => 'web-settings.OurTeam.team', 'uses' => 'PartnerController@store']);
	Route::delete('delete/team/{id}', ['as' => 'web-settings.OurTeam.editteam', 'uses' => 'PartnerController@destroy']);

	Route::get('update/editors/pic', ['as' => 'web-settings.EditorPic.editorpic', 'uses' => 'EditorspicController@create']);
	Route::post('store/editors/pic', ['as' => '', 'uses' => 'EditorspicController@store']);
	Route::get('edit/editors/pic/{id}', ['as' => 'web-settings.EditorPic.editeditorpic', 'uses' => 'EditorspicController@edit']);
	Route::put('edit/editors/pic/{id}', ['as' => 'web-settings.EditorPic.editeditorpic', 'uses' => 'EditorspicController@update']);
	Route::patch('patch/editors/pic/{id}', ['as' => '', 'uses' => 'EditorspicController@MakeActive']);
	Route::delete('delete/editors/pic/{id}', ['as' => '', 'uses' => 'EditorspicController@destroy']);


	Route::get('update/features', ['as' => 'web-settings.Features.feature', 'uses' => 'FirstFooterFeatureController@create']);
	Route::post('store/features', ['as' => '', 'uses' => 'FirstFooterFeatureController@store']);
	Route::get('edit/features/{id}', ['as' => '', 'uses' => 'FirstFooterFeatureController@edit']);
	Route::put('update/features/{id}', ['as' => '', 'uses' => 'FirstFooterFeatureController@update']);
	Route::delete('delete/features/{id}', ['as' => '', 'uses' => 'FirstFooterFeatureController@destroy']);

	Route::get('show/offerbox', ['as' => 'web-settings.offerbox.offer', 'uses' => 'OfferBoxController@create']);
	Route::put('update/offerbox/{id}', ['as' => '', 'uses' => 'OfferBoxController@update']);

	Route::get('show/home/timer', ['as' => 'web-settings.Hometimer.hometimer', 'uses' => 'MiddlePosterTimerController@create']);
	Route::put('update/home/timer', ['as' => '', 'uses' => 'MiddlePosterTimerController@update']);

	Route::get('manage/reviews', ['as' => 'web-settings.Review.reviews', 'uses' => 'ReviewController@create']);
	Route::delete('delete/reviews/{id}', ['as' => '', 'uses' => 'ReviewController@destroy']);

	Route::get('manage/testimonials', ['as' => 'web-settings.Testimonials.testimonials', 'uses' => 'TestimonialController@create']);
	Route::delete('delete/testimonials/{id}', ['as' => '', 'uses' => 'TestimonialController@destroy']);
	
	Route::get('manage/stock/categories', ['as' => 'stock-settings.categories.category', 'uses' => 'CategoryController@create']);
	Route::post('store/stock/categories', ['as' => '', 'uses' => 'CategoryController@store']);
	Route::get('edit/stock/categories/{id}', ['as' => '', 'uses' => 'CategoryController@edit']);
	Route::put('update/stock/categories/{id}', ['as' => '', 'uses' => 'CategoryController@update']);
	Route::delete('delete/stock/categories/{id}', ['as' => '', 'uses' => 'CategoryController@destroy']);
	
	Route::get('manage/stock/type', ['as' => 'stock-settings.type.type', 'uses' => 'TypeController@create']);
	Route::post('store/stock/type', ['as' => '', 'uses' => 'TypeController@store']);
	Route::get('edit/stock/type/{id}', ['as' => '', 'uses' => 'TypeController@edit']);
	Route::put('update/stock/type/{id}', ['as' => '', 'uses' => 'TypeController@update']);
	Route::delete('delete/stock/type/{id}', ['as' => '', 'uses' => 'TypeController@destroy']);


	Route::get('manage/stock/delivery', ['as' => 'stock-settings.delivery.delivery', 'uses' => 'DeliveryPlaceController@create']);
	Route::post('store/stock/delivery', ['as' => '', 'uses' => 'DeliveryPlaceController@store']);
	Route::get('edit/stock/delivery/{id}', ['as' => '', 'uses' => 'DeliveryPlaceController@edit']);
	Route::put('update/stock/delivery/{id}', ['as' => '', 'uses' => 'DeliveryPlaceController@update']);
	Route::delete('delete/stock/delivery/{id}', ['as' => '', 'uses' => 'DeliveryPlaceController@destroy']);
	
	Route::get('show/menu/items', ['as' => 'web-settings.Menu.menu', 'uses' => 'MenuController@create']);
	Route::post('update/menu/items', ['as' => '', 'uses' => 'MenuController@update']);
	
});
