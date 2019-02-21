<?php

 Route::post('signin', 'ApiMembershipController@signin')->name("auth.signin");
 Route::post('signup', 'ApiMembershipController@signup')->name("auth.signup");
  
    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        // Route::get('signout', 'AuthController@signout');
        // Route::get('user', 'AuthController@user');
    });