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
Route::get('/variant/{id}','Api\\ProductApiController@showProductVariant')->name('variant.show');