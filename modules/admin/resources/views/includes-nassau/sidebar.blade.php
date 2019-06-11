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
        <li>
            <a href="#userSubmenu" data-toggle="collapse" aria-expanded="false">User Management</a>
            <ul class="collapse list-unstyled" id="userSubmenu">
                <li>
                    <a href="{{ route('list-customer.index') }}" {{ Route::is('list-customer.index')? 'class=active' :'' }}>
                        Customers
                    </a>
                </li>
                <li>
                    <a href="{{ route('users.index') }}" {{ Route::is('users.index')? 'class=active' :'' }}>
                        Administrator
                    </a>
                </li>
            </ul>
        </li>
        @endcan

        @if(class_exists('\Modules\Product\Product'))
            @include('product::includes.sidebar-nav-item')
        @endif

        @if(class_exists('\Modules\Preorder\PreOrder'))
            @include('preorder::includes.sidebar-nav-item')
        @endif

    </ul>
</nav>
<!-- end sidebar -->