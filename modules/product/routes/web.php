<?php

Route::middleware('auth:admin')->group(function () {
    Route::resource('product', 'ProductController');    
    
});