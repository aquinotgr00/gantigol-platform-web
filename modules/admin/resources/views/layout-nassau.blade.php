<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('admin::includes-nassau.meta')

    <title>{{ config('app.name', 'GantiGol') }}</title>

    @stack('pre-core-style')
    @include('admin::includes-nassau.core-style')
    @stack('styles')
</head>

<body @guest class="log-in" @endguest>
    <div>
        <div class="container-fluid">
            <div class="row">
                {{-- start sidebar --}}
                @include('admin::includes-nassau.sidebar')
                {{-- end sidebar --}}

                <div class="col-md-9 ml-sm-auto col-lg-10 main">
                    @if(isset($data))
                    {{-- start header --}}
                    @pageHeader(['title'=>$data['title']])
                    {{-- end header --}}
                    @endif 
                    
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    
    {{-- start footer --}}
    @include('admin::includes-nassau.footer')
    {{-- end footer --}}
    
    {{-- Logout Modal --}}
    @include('admin::auth.confirm-logout')
    
    {{-- Other Modals --}}
    @yield('modals')

    @include('admin::includes-nassau.core-javascript')
    @stack('scripts')

</body>

</html>