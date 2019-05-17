<!-- start sidebar -->
<nav class="col-sm-2 sidebar" id="sidebar">
    <img src="{{ asset('vendor/admin/images/logo-nassau.svg') }}" class="logo logo-nav" alt="logo nassau">
    <hr>
    <ul class="nav flex-column nav-item">
        <li>
            <a class="active" href="{{ route('admin.dashboard') }}">Summary</a>
        </li>
        <!-- Nav Item - Users -->
        @can('view-users')
        <li class="nav-item{{ Route::is('users.index')?' active':'' }}">
            <a class="nav-link" href="{{ route('users.index') }}">
                <i class="fas fa-users"></i>
                <span>Users</span></a>
        </li>
        @endcan
    </ul>
</nav>
<!-- end sidebar -->