<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('admin::includes-nassau.meta')

    <title>{{ config('app.name', 'Laravel') }}</title>

    @include('admin::includes-nassau.core-style')
    @stack('styles')
</head>

<body class="log-in">
    <div id="login">
        <div class="container">
            @yield('content')
        </div>
    </div>

    @include('admin::includes-nassau.core-javascript')
    @stack('scripts')

</body>

</html>