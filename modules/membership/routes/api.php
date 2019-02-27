<?php

 Route::post('signin', 'ApiMembershipController@signin')->name("auth.signin");
 Route::post('signup', 'ApiMembershipController@signup')->name("auth.signup");
 Route::post('token/signin','ApiMembershipController@accessTokenMemberVerification')->name("auth.token.signin");
 Route::post('token/verification/','ApiMembershipController@verificationMemberhandler')->name("auth.token.verification");
  
    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        // Route::get('signout', 'AuthController@signout');
        Route::get('request/verification', 'ApiMembershipController@requestToken')->name("auth.request.verification");
    });