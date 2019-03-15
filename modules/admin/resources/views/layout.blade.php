<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('admin::includes.meta')
        
        <title>{{ config('app.name', 'Laravel') }}</title>
        
        @include('admin::includes.core-style')
        @stack('styles')
    </head>
    <body @guest class="bg-gradient-primary" @endguest>
        @auth('admin')

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            @sidebar
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                @content
                <!-- End of Main Content -->

                <!-- Footer -->
                @footer
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        @scrollToTop

        <!-- Logout Modal-->
        @include('admin::auth.confirm-logout')

        @endauth

        @guest('admin')
        @yield('content')
        @endguest
        
        @include('admin::includes.core-javascript')
        
        @stack('scripts')
    </body>
</html>
