<?php

Route::get('cart/{id}', 'CartApiController@show')->name("cart.show");
Route::post('cart', 'CartApiController@store')->name("cart.store");
Route::put('cart/{id}', 'CartApiController@update')->name("cart.update");
Route::put('cart-item/{id}', 'CartApiController@updateItem')->name("cart.update-item");
Route::post('cart-trashed/{id}', 'CartApiController@trashed')->name("cart.trashed");
Route::post('cart-item-delete/{id}', 'CartApiController@deleteItem')->name("cart.delete");
Route::get('cart-wishlist/{id}', 'CartApiController@getWishList')->name("cart.wishlist");
Route::get('cart-checked/{id}', 'CartApiController@getChecked')->name("cart.checked");
