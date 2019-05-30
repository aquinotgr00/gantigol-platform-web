<?php

Route::middleware('auth:admin')->group(function () {
    Route::resource('list-customer', 'CustomerController');
});
