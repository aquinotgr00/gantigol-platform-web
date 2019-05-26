<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('admin::includes-nassau.meta')

    <title>{{ config('app.name', 'Laravel') }}</title>

    @include('admin::includes-nassau.core-style')
    @stack('styles')
</head>

<body @guest class="log-in" @endguest>
    <div>
        <div class="container-fluid">
            <div class="row">
                <!-- start sidebar -->
                @include('admin::includes-nassau.sidebar')
                <!-- end sidebar -->


                <div class="col-md-9 ml-sm-auto col-lg-10 main">
                    <!-- start header -->
                    @if(isset($data)) 
                    @include('admin::includes-nassau.sidebar-heading',$data)
                    @endif 
                    <!-- end header -->
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <!-- start footer -->
    @include('admin::includes-nassau.footer')
    <!-- end footer -->
    
    @include('admin::auth.confirm-logout')

    @include('admin::includes-nassau.core-javascript')
    @stack('scripts')

</body>

</html>