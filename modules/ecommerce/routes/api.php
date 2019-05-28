<?php

Route::get('cart/{id}', 'CartApiController@show')->name("cart.show");
Route::post('cart', 'CartApiController@store')->name("cart.store");
Route::put('cart/{id}', 'CartApiController@update')->name("cart.update");
Route::put('cart-item/{id}', 'CartApiController@updateItem')->name("cart.update-item");
Route::post('cart-trashed/{id}', 'CartApiController@trashed')->name("cart.trashed");
Route::post('cart-delete-item/{id}', 'CartApiController@deleteItem')->name("cart.delete");
Route::get('cart-wishlist/{id}', 'CartApiController@getWishList')->name("cart.wishlist");
Route::get('cart-checked/{id}', 'CartApiController@getChecked')->name("cart.checked");
Route::post('cart-guest-login', 'CartApiController@cartGuestLogin')->name("cart.guest-login");
Route::get('cart-checked/{id}', 'CartApiController@getChecked')->name("cart.checked");
Route::post('cart-checkout', 'CheckoutApiController@store')->name("cart.checkout");
Route::post('cart-delete-variant/{id}', 'CartApiController@deleteItemVariant')->name("cart.delete-variant");

Route::get('report/sales', 'ReportApiController@sales')->name('report.sales');
Route::get('report/customer', 'ReportApiController@customer')->name('report.customer');
Route::get('report/inventory', 'ReportApiController@inventory')->name('report.inventory');
Route::get('report/stock', 'ReportApiController@stock')->name('report.stock');