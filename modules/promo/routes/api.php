<?php
 Route::get('promo', 'PromoApiController@getPromo')->name("promo.api.single");
 Route::get('promo/{code}', 'PromoApiController@getPromoByCode')->name("promo.api.single");