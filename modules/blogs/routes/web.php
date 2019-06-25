<?php

//Post
Route::get('/', 'BlogController@index')->name('blog.index')->middleware('can:view-post');
Route::get('/post', 'BlogController@create')->name('blog.post.create')->middleware('can:add-post');
Route::get('/post/edit/{id}', 'BlogController@edit')->name('blog.post.edit')->middleware('can:edit-post');
Route::get('/post/list', 'BlogController@list')->name('blog.post.list');
Route::post('/post/store', 'BlogController@store')->name('blog.post.store');
Route::post('/post/update', 'BlogController@update')->name('blog.post.update');
Route::post('/post/publish/{id}', 'BlogController@publish')->name('blog.post.publish')->middleware('can:publish-post');
Route::get('/post/hide/{id}', 'BlogController@hide')->name('blog.post.hide');
Route::get('/post/show/{id}', 'BlogController@show')->name('blog.post.show');

//blogcategory
Route::get('/category', 'BlogCategoryController@index')->name('blog.category.index')->middleware('can:view-category-post');
Route::get('/category/list', 'BlogCategoryController@list')->name('blog.category.list');
Route::get('/category/new', 'BlogCategoryController@indexFormCategory')->name('blog.category.new')->middleware('can:add-category-post');
Route::get('/category/edit/{id}', 'BlogCategoryController@indexFormCategory')->name('blog.category.edit')->middleware('can:edit-category-post');
Route::get('/post/highlight/{category}/{id}','BlogCategoryController@setHighlight')->name('blog.category.highlight')->middleware('can:edit-category-post');


//blogcategorypost
Route::post('/category/new', 'BlogCategoryController@actionPostCategory')->name('blog.category.new.post');
Route::post('/category/edit/{id}', 'BlogCategoryController@actionPostCategory')->name('blog.category.new.edit');
