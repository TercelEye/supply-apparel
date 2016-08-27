<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::auth();
Route::get('logout', 'Auth\AuthController@getLogout');
Route::post('user/login','UserController@login');
Route::get('auth/facebook', 'Auth\AuthController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Auth\AuthController@handleFacebookCallback');

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'web'], function () {
	Route::resource('category','CategoryController');
});

//Homepage filters
Route::group(['prefix' => 'women','middleware' => 'web'], function () {
    Route::post('best-sellers','HomeController@best_sellers_women');
    Route::post('new-arrivals','HomeController@new_arrivals_women');
    Route::post('must-haves','HomeController@must_haves_women');
});

//Seller
Route::get('create-boutique','ShopController@landing_page');

Route::get('boutique-register','SellerRegisterController@index');
Route::post('boutique-register','SellerRegisterController@store');

Route::group(['prefix' => 'seller','middleware' => 'web'], function () {
	

    Route::get('create-boutique','HomeController@best_sellers_women');
    Route::get('profile','HomeController@new_arrivals_women');
    Route::get('contact-details','HomeController@must_haves_women');
});

Route::post('favorites/{product}','FavoriteController@toggle');

