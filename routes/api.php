<?php

Route::resource('categories', 'Categories\CategoryController');
Route::resource('products', 'Products\ProductController');

//untuk searching product
Route::post('products/search', 'Products\ProductController@search');

Route::resource('addresses', 'Addresses\AddressController'); //Perlu Login

Route::resource('countries', 'Countries\CountryController');

Route::resource('orders', 'Orders\OrderController'); //Perlu Login

Route::resource('payment-methods', 'PaymentMethods\PaymentMethodController'); //Perlu Login

Route::get('addresses/{address}/shipping', 'Addresses\AddressShippingController@action'); //Perlu Login

Route::group(['prefix' => 'auth'], function() {

    Route::post('register', 'Auth\RegisterController@action');
    Route::post('login', 'Auth\LoginController@action');

    Route::get('me', 'Auth\MeController@action'); //Perlu Login
    
});

 //Perlu Login
Route::resource('cart', 'Cart\CartController', [

	'parameters' => [
		'cart' => 'productVariation'
	]
]);
