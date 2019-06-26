<?php

Route::get('/', 'PromoController@index')->name('promo.index')->middleware('can:view-promo');
Route::get('/list','PromoController@list')->name('promo.list');
Route::get('/create', 'PromoController@create')->name('promo.create')->middleware('can:add-promo');
Route::get('/delete/{code}', 'PromoController@expiringPromo')->name('promo.delete')->middleware('can:disable-promo');
Route::post('/create', 'PromoController@createPromo')->name('promo.create.post');