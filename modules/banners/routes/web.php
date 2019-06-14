<?php

Route::get('/', 'BannerController@index')->name('banner.index');
Route::get('/list','BannerController@list')->name('banner.list');
Route::get('/create', 'BannerController@indexCreate')->name('banner.create');
Route::post('/create', 'BannerController@store')->name('banner.create.post');
Route::get('/edit/{id}', 'BannerController@indexUpdate')->name('banner.edit');
Route::post('/edit/{id}', 'BannerController@update')->name('banner.edit.post');
Route::get('/delete/{id}', 'BannerController@delete')->name('banner.delete');

Route::get('/category/', 'BannerPlacementController@index')->name('banner-category.index');
Route::get('/category/list','BannerPlacementController@list')->name('banner-category.list');
Route::get('/category/edit/{id}', 'BannerPlacementController@indexUpdate')->name('banner-category.edit');
Route::post('/category/edit/{id}', 'BannerPlacementController@update')->name('banner-category.edit.post');
Route::get('/category/delete/{id}', 'BannerPlacementController@delete')->name('banner-category.delete');