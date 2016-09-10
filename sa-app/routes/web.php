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
    // Cart::destroy();
  // echo Cart::totalItems(true);
// Let's see what we have have in there...
    return view('home');
});

Route::auth();
//Route::get('logout', 'Auth\AuthController@getLogout');
Route::post('user/login','UserController@login');
//Route::get('auth/facebook', 'Auth\AuthController@redirectToFacebook');
//Route::get('auth/facebook/callback', 'Auth\AuthController@handleFacebookCallback');

Route::get('/home', 'HomeController@index');


//Homepage filters
Route::group(['prefix' => 'women','middleware' => 'web'], function () {
    Route::post('best-sellers','HomeController@best_sellers_women');
    Route::post('new-arrivals','HomeController@new_arrivals_women');
    Route::post('must-haves','HomeController@must_haves_women');
});
Route::group(['prefix' => 'men','middleware' => 'web'], function () {
    Route::post('best-sellers','HomeController@best_sellers_men');
    Route::post('new-arrivals','HomeController@new_arrivals_men');
    Route::post('must-haves','HomeController@must_haves_men');
});
Route::group(['prefix' => 'kids','middleware' => 'web'], function () {
    Route::post('best-sellers','HomeController@best_sellers_kids');
    Route::post('new-arrivals','HomeController@new_arrivals_kids');
    Route::post('must-haves','HomeController@must_haves_kids');
});



Route::resource('category','CategoryController');

//Seller
Route::get('create-boutique','ShopController@landing_page');

Route::get('become-seller','BecomeSellerController@index');
Route::post('become-seller','BecomeSellerController@store');

Route::get('my-shop/type','CreateShopController@shop_type');
Route::post('my-shop/type','CreateShopController@shop_type_store');

Route::get('my-shop/profile','CreateShopController@profile');
Route::post('my-shop/profile','CreateShopController@profile_store');

Route::get('my-shop/contact-details','CreateShopController@contact');
Route::post('my-shop/contact-details','CreateShopController@contact_store');

Route::get('membership/plans','MembershipPlansController@index');
Route::post('membership/plans/{plan}','MembershipPlansController@store');





// add product
Route::resource('seller/product','CreateProductController');
Route::get('seller/product/images/{product}','ProductImageController@index');
Route::get('seller/product/image-list/{product}','ProductImageController@image_list');
Route::post('seller/product/imageupload/{product}','ProductImageController@imageupload');
Route::post('seller/product/delete-image/{image}','ProductImageController@delete_image');
Route::post('seller/store-product-color/{image}','ProductImageController@store_product_color');
Route::post('seller/product/publish/{product}','ProductImageController@publish_product');


Route::group(['middleware' => ['web','auth']], function () {
	Route::get('seller','SellerController@index'); //dashboard
});

// Blog functions
Route::group(['middleware' => ['web','auth']], function () {
	Route::get('blog/edit','CreateBlogController@edit');
	Route::post('blog/edit','CreateBlogController@update');
	Route::get('blog/view','CreateBlogController@view');
	Route::get('blog/delete','CreateBlogController@delete');

	Route::get('blog/create','CreateBlogController@index');
	Route::post('blog/create','CreateBlogController@create');
});

//products
Route::get('product/{product}','ProductsController@single_product');
Route::post('product/{product}/image-gallery','ProductsController@colours');

//add to cart
Route::post('add-to-cart','CartController@store');
Route::any('my-cart','CartController@view');
Route::post('cart-remove-item','CartController@delete_cart');

//filter 
Route::get('men-clothing','CartController@view');

Route::post('favorites/{product}','FavoriteController@toggle');
