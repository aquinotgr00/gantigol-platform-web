<?php

//sales
Route::get('/sales', 'ReportController@index')->name('report.sales.index')->middleware('can:view-report-sales');
Route::get('/variants', 'ReportController@indexVariant')->name('report.variants.index')->middleware('can:view-report-variants');