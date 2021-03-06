<?php

Route::middleware('admin_guest')->group(function () {
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\LoginController@login');
});

Route::middleware('auth:admin')->group(function () {
    Route::post('/logout', 'Auth\LoginController@logout')->name('admin.logout');
    
    Route::view('/', 'admin::dashboard-nassau',['data'=> ['title'=>'Summary']])->name('admin.dashboard');
    Route::get('/setting-dashboard', 'SettingController@index')->name('admin.setting-dashboard');
    Route::post('/setting-dashboard', 'SettingController@store')->name('admin.setting-dashboard.store');
    

    Route::resource('users', 'UserController');
    Route::put('/users/{user}/status', 'UserController@statusUpdate')->name('users.status');
});

if (!Route::has('login')) {
    Route::get('/blank', function () {
    })->name('login');
}
