<?php

Route::middleware('auth:admin')->group(function () {
    Route::resource('product-management', 'ProductController');    
    
});