<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Custom fonts for this template-->
        <link href="{{ asset('vendor/admin/css/fontawesome-free/all.min.css') }}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="{{ asset('vendor/admin/css/sbadmin2/sb-admin-2.min.css') }}" rel="stylesheet">

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
        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('vendor/admin/js/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/admin/js/bootstrap/bootstrap.bundle.min.js') }}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ asset('vendor/admin/js/jquery-easing/jquery.easing.min.js') }}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{ asset('vendor/admin/js/sbadmin2/sb-admin-2.min.js') }}"></script>

        @stack('scripts')

    </body>

</html>
