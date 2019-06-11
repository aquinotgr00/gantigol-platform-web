<?php

Route::resource('stockopname', 'StockOpnameController');
Route::get('stockopname-approve/{stockOpname}', 'StockOpnameController@showOpnameConfirmForms')->name('stockopname.confirm');
Route::post('stockopname-update', 'StockOpnameController@doStoreStockOpname')->name('stockopname.confirmed');

Route::resource('adjustment', 'AdjustmentController');
