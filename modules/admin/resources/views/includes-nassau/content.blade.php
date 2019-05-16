<div id="content">

    <!-- Topbar -->
    @topbar
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Breadcrumbs -->
        {{ Breadcrumbs::render() }}

        @yield('content')
    </div>
    <!-- /.container-fluid -->

</div>