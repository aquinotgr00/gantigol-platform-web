<?php

Route::get('paid-order', 'PaidOrderController@index')->name('paid-order.index');
Route::get('paid-order/{id}', 'PaidOrderController@show')->name('paid-order.show');
Route::get('paid-order-chart', 'PaidOrderController@indexChart')->name('paid-order.chart');
Route::get('paid-order-chart-pie', 'PaidOrderController@indexChartPie')->name('paid-order.chart.pie');
Route::get('paid-order-variant/chart', 'PaidOrderController@indexChartVariants')->name('paid-order.chart.variant');
Route::get('paid-order-variant/count', 'PaidOrderController@countVariant')->name('paid-order.count.variant');
Route::get('paid-order-card', 'PaidOrderController@indexCard')->name('paid-order.card');
Route::get('paid-order-card/sales', 'PaidOrderController@indexCardSales')->name('paid-order.card.sales');
Route::get('paid-order-card/item', 'PaidOrderController@countProduct')->name('paid-order.card.item');
Route::get('paid-order-card/customer', 'PaidOrderController@countCustomer')->name('paid-order.card.customer');
Route::get('order-transaction', 'TransactionController@index')->name('order-transaction.index');
Route::put('order-transaction/update/{id}', 'TransactionController@update')->name('order-transaction.update');