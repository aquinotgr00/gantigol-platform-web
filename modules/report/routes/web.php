<?php

//sales
Route::get('/sales', 'ReportController@index')->name('report.sales.index');
Route::get('/variants', 'ReportController@indexVariant')->name('report.variants.index');