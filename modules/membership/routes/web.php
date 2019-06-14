<?php

Route::get('list-membership', 'MembershipController@index')->name('list-membership.index');
Route::get('ajax-all-membership', 'MembershipController@ajaxAllMembership')->name('ajax.all-membership');
