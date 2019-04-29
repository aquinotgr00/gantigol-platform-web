<?php

Route::prefix(config('medias.prefix', 'medias'))->middleware('auth:admin')->group(function () {
    Route::get('/library', 'MediaController@mediaLibrary')->name('media.library');
    Route::post('/category/add', 'MediaController@createMediaCategory')->name('media.storeCategory');
    Route::post('/category/assign', 'MediaController@assignCategory')->name('media.assignMediaCategory');
    Route::post('/projects/media', 'ContentMediaController@storeMedia')->name('projects.storeMedia');
    Route::post('/projects/store', 'ContentMediaController@store')->name('projects.store');
});

Route::get('/library2', 'MediaController@mediaLibrary2')->name('media.library2');