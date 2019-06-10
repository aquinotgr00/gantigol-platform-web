<?php

//Post
Route::get('/', 'BlogController@index')->name('blog.index');
Route::get('/post', 'BlogController@create')->name('blog.post.create');
Route::get('/post/edit/{id}', 'BlogController@edit')->name('blog.post.edit');
Route::get('/post/list', 'BlogController@list')->name('blog.post.list');
Route::post('/post/store', 'BlogController@store')->name('blog.post.store');
Route::post('/post/update', 'BlogController@update')->name('blog.post.update');
Route::post('/post/publish/{id}', 'BlogController@publish')->name('blog.post.publish');
Route::get('/post/hide/{id}', 'BlogController@hide')->name('blog.post.hide');
Route::get('/post/show/{id}', 'BlogController@show')->name('blog.post.show');


//blogcategory
Route::get('/category', 'BlogCategoryController@index')->name('blog.category.index');
Route::get('/category/list', 'BlogCategoryController@list')->name('blog.category.list');
Route::get('/category/new', 'BlogCategoryController@indexFormCategory')->name('blog.category.new');
Route::get('/category/edit/{id}', 'BlogCategoryController@indexFormCategory')->name('blog.category.edit');

//blogcategorypost
Route::post('/category/new', 'BlogCategoryController@actionPostCategory')->name('blog.category.new.post');
Route::post('/category/edit/{id}', 'BlogCategoryController@actionPostCategory')->name('blog.category.new.edit');
