<?php

Route::resource('list-preorder', 'PreorderController');

Route::get('preorder-transaction/{id}', 'TransactionController@pending')->name('pending.transaction');
Route::get('shipping-transaction/{id}', 'TransactionController@shipping')->name('shipping.transaction');
Route::get('show-transaction/{id}', 'TransactionController@showTransaction')->name('show.transaction');
Route::get(
    'shipping-transaction/{id}/edit',
    'TransactionController@shippingEdit'
)->name('shipping-edit.transaction');

Route::get('list-preorder-draft', 'PreorderController@draft')->name('list-preorder.draft');
Route::get('list-preorder-closed', 'PreorderController@closed')->name('list-preorder.closed');

Route::get('setting-preorder', 'SettingPreorderController@index')->name('setting-preorder.index');
Route::post('setting-reminder', 'SettingReminderController@store')->name('setting-reminder.store');
Route::get('send-reminder/{id}', 'TransactionController@sendReminder')->name('transaction.send-reminder');

Route::get('shipping-sticker/{batch_id}', 'TransactionController@printShippingSticker')->name('setting-shipping.sticker');
Route::get('shipping-preview', 'SettingShippingController@preview')->name('setting-shipping.preview');
Route::post('shipping-sticker', 'SettingShippingController@storeSize')->name('shipping.store-size');

Route::get('all-transaction', 'AllTransactionController@index')->name('all-transaction.index');
Route::get('all-transaction/{id}', 'AllTransactionController@show')->name('all-transaction.show');
Route::get('ajax/all-transaction', 'AllTransactionController@ajaxAllTransactions')->name('ajax.all-transaction');
Route::put('all-transaction/{id}', 'AllTransactionController@update')->name('all-transaction.update');

Route::post('store-shipping-number', 'TransactionController@storeShippingNumber')->name('store-shipping-number');

