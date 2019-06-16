<?php

Route::resource('product', 'ProductController');
Route::resource('product-variant', 'ProductAttributeController');
Route::resource('product-size-chart', 'ProductSizeChartController');

Route::post('datatables/variant', 'ProductAttributeController@getAllDatatables')->name('datatables.variant');
Route::post('datatables/size-chart', 'ProductSizeChartController@getAllDatatables')->name('datatables.size-chart');

Route::post('ajax/add-variant', 'ProductAttributeController@ajaxAddVariant')->name('ajax.add-variant');
Route::get('ajax/all-variant', 'ProductAttributeController@ajaxGetAllVariant')->name('ajax.all-variant');
Route::post('ajax/add-by-variant/{id}', 'ProductAttributeController@ajaxAddByIDVariant')->name('ajax.add-by-variant');
Route::get('ajax/variant-values', 'ProductAttributeController@ajaxVariantValues')->name('ajax.variant-values');

Route::post('ajax/store-adjustment', 'ProductController@ajaxStoreAdjustment')->name('ajax.store-adjustment');
Route::post('ajax/all-product', 'ProductController@ajaxAllProduct')->name('ajax.all-product');
Route::post('ajax/detail-product-activities/{id}', 'ProductController@ajaxDetailProductActivites')->name('ajax.detail-product-activities');

Route::get('product/set-visible/{id}', 'ProductController@setVisibleProduct')->name('product.set-visible');
Route::get('product/delete-image/{id}', 'ProductController@deleteImage')->name('product.delete-image');