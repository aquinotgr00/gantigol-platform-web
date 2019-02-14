<?php

Route::get('/{model}', 'MediaController@mediaUp')->name('media.view.content');
Route::resource('content', 'ContentMediaController', ['only' => ['store', 'destroy'], 'as' => 'content']);
Route::delete('content', 'ContentMediaController@destroyAll')->name('content.media.destroy_all');
