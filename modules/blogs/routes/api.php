<?php

 Route::get('post/{id}', 'BlogApiController@getOnePost')->name("blog.article");
 Route::get('post/tag/limit/{limit}', 'BlogApiController@getManyPostWithTag')->name("blog.article.tag");
 Route::get('post/category/{name}', 'BlogApiController@getManyPostWithCategories')->name("blog.article.category");
 Route::get('search/{key}', 'BlogApiController@getPostAndProductBySearch')->name("blog.article.search");

