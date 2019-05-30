<?php

Route::middleware('auth:admin')->group(function () {
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
});
