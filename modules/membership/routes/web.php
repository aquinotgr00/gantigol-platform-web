<?php

Route::get('list-membership', 'MembershipController@index')->name('list-membership.index');
Route::get('members/{member}', 'MembershipController@show')->name('members.show');
Route::get('ajax-all-membership', 'MembershipController@ajaxAllMembership')->name('ajax.all-membership');
