<?php

Route::get('paid-order', 'PaidOrderController@index')->name('paid-order.index');
Route::get('paid-order/{id}', 'PaidOrderController@show')->name('paid-order.show');
Route::get('order-transaction', 'TransactionController@index')->name('order-transaction.index');
Route::put('order-transaction/update/{id}', 'TransactionController@update')->name('order-transaction.update');