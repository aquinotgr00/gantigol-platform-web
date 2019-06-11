<?php

 Route::get('banner/{category}/{limit}', 'BannerController@listApi')->name("banner.api.list");