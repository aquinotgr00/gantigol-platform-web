<?php

Route::get('/', 'BlogController@index')->name('blog.index');

//blogcategory
Route::get('/category','BlogCategoryController@index')->name('blog.category.index');
Route::get('/category/new','BlogCategoryController@indexFormCategory')->name('blog.category.new');
Route::get('/category/edit/{id}','BlogCategoryController@indexFormCategory')->name('blog.category.edit');

//blogcategorypost
Route::post('/category/new','BlogCategoryController@actionPostCategory')->name('blog.category.new.post');
Route::post('/category/edit/{id}','BlogCategoryController@actionPostCategory')->name('blog.category.new.edit');