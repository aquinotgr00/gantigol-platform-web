<?php

Route::middleware('auth:admin')->group(function () {
    Route::resource('product', 'ProductController');    
    Route::resource('product-variant', 'ProductVariantController');
    Route::resource('product-size-chart', 'ProductSizeChartController');
});