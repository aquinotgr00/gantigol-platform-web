<?php

Route::get('city','ShippingController@city');
Route::get('cost','ShippingController@cost');
Route::get('province','ShippingController@province');
Route::get('province/{id}/city','ShippingController@cityByProvince');
Route::get('city/{id}/subdistrict','ShippingController@subdistrictByCity');
Route::get('options','ShippingController@shipmentOptions');
Route::get('subdistrict','ShippingController@subdistrict');
