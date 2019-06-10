<?php

Route::get('/', 'PromoController@index')->name('promo.index');
Route::get('/list','PromoController@list')->name('promo.list');
Route::get('/create', 'PromoController@create')->name('promo.create');
Route::get('/delete/{code}', 'PromoController@expiringPromo')->name('promo.delete');
Route::post('/create', 'PromoController@createPromo')->name('promo.create.post');