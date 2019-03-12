<?php

Route::get('/library', 'MediaController@mediaLibrary')->name('media.library');
Route::post('/category/add', 'MediaController@createMediaCategory')->name('media.storeCategory');
Route::post('/category/assign', 'MediaController@assignCategory')->name('media.assignMediaCategory');
Route::post('/projects/media', 'ContentMediaController@storeMedia')->name('projects.storeMedia');
Route::post('/projects/store', 'ContentMediaController@store')->name('projects.store');
