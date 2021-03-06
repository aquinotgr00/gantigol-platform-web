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
Route::get('cart-merge/{id}', 'CartApiController@mergeCart')->name("cart.merge");
Route::get('cart-by-user/{id}', 'CartApiController@getByUser')->name("cart.by-user");

Route::get('report/sales', 'ReportApiController@sales')->name('report.sales');
Route::get('report/customer', 'ReportApiController@customer')->name('report.customer');
Route::get('report/inventory', 'ReportApiController@inventory')->name('report.inventory');
Route::get('report/stock', 'ReportApiController@stock')->name('report.stock');
Route::get('order-regular', 'OrderApiController@index')->name('order-regular.index');
Route::get('order-regular/{id}', 'OrderApiController@show')->name('order-regular.show');
Route::get('order/by-user/{id}', 'OrderApiController@getByUserID')->name('order-regular.by-user');

Route::post('payment/notification', 'MidtransApiController@paymentNotification')->name('midtrans.notification');
Route::post('payment/finish', 'MidtransApiController@paymentFinish')->name('midtrans.finish');
Route::get('payment/unfinish', 'MidtransApiController@paymentUnfinish')->name('midtrans.unfinish');
Route::get('payment/error', 'MidtransApiController@paymentError')->name('midtrans.error');