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
Route::apiResource('preorder', 'Api\\PreorderApiController');
Route::apiResource('production-batch', 'Api\\ProductionBatchApiController');
Route::apiResource('production-preorder', 'Api\\ProductionApiController');
Route::apiResource('transaction', 'Api\\TransactionApiController');

Route::get('production-by-batch/{id}', 'Api\\ProductionApiController@getByBatchID')->name('production-by-batch');
Route::post('production-trashed/{id}', 'Api\\ProductionApiController@trashed')->name('production-trashed');
Route::post('production-restore/{id}', 'Api\\ProductionApiController@restore')->name('production-restore');

Route::get('/batch-by-preorder/{id}', 'Api\\ProductionBatchApiController@getByPreOrderID')->name('batch-by-preorder');

Route::post(
    'save-shipping-number',
    'Api\\ProductionApiController@saveShippingNumber'
)->name('production.save-shipping-number');

Route::get('pending/{id}', 'Api\\TransactionApiController@getPendingByPreorder')->name('transaction.pending');
Route::get('paid/{id}', 'Api\\TransactionApiController@getPaidByPreorder')->name('transaction.paid');
Route::get('preorder-by-status', 'Api\\PreorderApiController@getByStatus')->name('preorder.by-status');
Route::post('close-preorder/{id}', 'Api\\PreorderApiController@closePreOrder')->name('preorder.close');

Route::post(
    'set-paid',
    'Api\\TransactionApiController@setPaid'
)->name('transaction.set-paid');

Route::prefix('ongkir')
    ->name('ongkir.')
    ->group(function () {
        Route::get('provinces', 'Api\\RajaOngkirApiController@getProvinces');
        Route::get('city-by-province', 'Api\\RajaOngkirApiController@getCityByProvinceID');
        Route::get('subdistrict', 'Api\\RajaOngkirApiController@getSubdistrict');
        Route::post('cost', 'Api\\RajaOngkirApiController@getShippingCost');
        Route::post('waybill', 'Api\\RajaOngkirApiController@getWayBill');
    });

Route::get('all-transaction', 'Api\\TransactionApiController@getAll');

Route::post('update-courier', 'Api\\ProductionApiController@updateCourier')->name('production.update-courier');