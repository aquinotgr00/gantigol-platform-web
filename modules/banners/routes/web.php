<?php

Route::get('/', 'BannerController@index')->name('banner.index')->middleware('can:view-banner');
Route::get('/list','BannerController@list')->name('banner.list');
Route::get('/create', 'BannerController@indexCreate')->name('banner.create')->middleware('can:add-banner');
Route::post('/create', 'BannerController@store')->name('banner.create.post');
Route::get('/edit/{id}', 'BannerController@indexUpdate')->name('banner.edit')->middleware('can:edit-banner');
Route::post('/edit/{id}', 'BannerController@update')->name('banner.edit.post');
Route::get('/delete/{id}', 'BannerController@delete')->name('banner.delete')->middleware('can:edit-banner');

Route::get('/category/', 'BannerPlacementController@index')->name('banner-category.index')->middleware('can:view-category-banner');
Route::get('/category/list','BannerPlacementController@list')->name('banner-category.list');
Route::get('/category/edit/{id}', 'BannerPlacementController@indexUpdate')->name('banner-category.edit')->middleware('can:edit-category-banner');
Route::post('/category/edit/{id}', 'BannerPlacementController@update')->name('banner-category.edit.post');
Route::get('/category/delete/{id}', 'BannerPlacementController@delete')->name('banner-category.delete')->middleware('can:edit-category-banner');