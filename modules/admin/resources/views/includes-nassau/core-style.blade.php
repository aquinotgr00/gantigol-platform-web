<!-- Bootstrap css -->
<link rel="stylesheet" href="{{ asset('vendor/admin/css/bootstrap.min.css') }} " >

<link href="{{ asset('vendor/admin/css/fontawesome-free/all.min.css') }}" rel="stylesheet">
<!-- Custom styles for this template -->
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/admin/css/style.css') }}">

<!-- favicon -->
@php 

$img_favicon = asset('vendor/admin/images/favicon.ico');

@endphp

@php

if(class_exists('\Modules\Admin\SettingDashboard')){
    $setting        = \Modules\Admin\SettingDashboard::first();
    $img_favicon    = $setting->favicon;
} 
@endphp

<link rel="shortcut icon" type="image/png" href="{{ $img_favicon }}">

<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet"> 