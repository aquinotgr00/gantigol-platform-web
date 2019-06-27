<?php

Route::prefix(config('medias.prefix', 'medias'))->middleware('auth:admin')->group(function () {
    
    Route::get('library', 'MediaController@index')->name('media.library');
    Route::delete('library/{id}', 'MediaController@destroy')->name('media.destroy');
    Route::get('library/create', 'MediaController@create')->name('media.library.create');
    Route::get('library/store', 'MediaController@create')->name('media.library.store');
    
    Route::post('category/add', 'MediaController@createMediaCategory')->name('media.storeCategory');
    Route::post('category/assign', 'MediaController@assignCategory')->name('media.assignMediaCategory');
    Route::post('projects/media', 'ContentMediaController@storeMedia')->name('projects.storeMedia');
    Route::post('projects/store', 'ContentMediaController@store')->name('projects.store');
    
    // usage example
    Route::prefix('library')->group(function () {
        Route::prefix('popup-example')->group(function () {
            Route::view('single', 'medias::usage-example.single')->name('media.library.example.single');
            Route::view('multiple', 'medias::usage-example.multiple');
            Route::view('combine', 'medias::usage-example.combine');
            Route::view('wysiwyg', 'medias::usage-example.wysiwyg');
        });
    });
});

Route::get('/library2', 'MediaController@mediaLibrary2')->name('media.library2');
