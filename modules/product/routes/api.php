<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */
Route::apiResource('items', 'Api\\ProductApiController');
Route::post('/upload/image-product','Api\\ProductApiController@uploadImage')->name('upload.image-product');
Route::apiResource('items-variant', 'Api\\ProductVariantApiController');
Route::post('/store-atribute','Api\\ProductVariantApiController@storeAtribute')->name('product.store-atribute');
Route::get('/get-atribute','Api\\ProductVariantApiController@getAtribute')->name('product.get-atribute');
Route::apiResource('items-size', 'Api\\ProductSizeChartApiController');
