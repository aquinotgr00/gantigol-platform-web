<!-- start sidebar -->
<nav class="col-sm-2 sidebar" id="sidebar">
    <img src="{{ asset('vendor/admin/images/logo-nassau.svg') }}" class="logo logo-nav" alt="logo nassau">
    <hr>
    <ul class="nav flex-column nav-item">
        @sidebarNavItem(['routeName'=>'admin.dashboard','title'=>'Summary'])
        @sidebarNavItem(['routeName'=>'media.library','title'=>'Media Library'])
        <!-- Nav Item - Users -->
        @can('view-users')
        <li>
            <a href="#userSubmenu" data-toggle="collapse" aria-expanded="false">User Management</a>
            <ul class="collapse list-unstyled" id="userSubmenu">
                @sidebarNavItem(['routeName'=>'list-customer.index','title'=>'Customers'])
                @sidebarNavItem(['routeName'=>'list-membership.index','title'=>'Memberships'])
                @sidebarNavItem(['routeName'=>'users.index','title'=>'Administrator'])
            </ul>
        </li>
        @endcan

        @if(class_exists('\Modules\Product\Product'))
            @can('product-management')
                @include('product::includes.sidebar-nav-item')
            @endcan
        @endif
        @if(class_exists('\Modules\Ecommerce\Cart'))
            @can('order-management')
                @include('ecommerce::includes.sidebar-nav-item')
            @endcan
        @endif
        @if(class_exists('\Modules\Preorder\PreOrder'))
            @can('preorder-management')
                @include('preorder::includes.sidebar-nav-item')
            @endcan
        @endif
        @if(class_exists('\Modules\Blogs\Blog'))
            @can('content-management')
                @include('blogs::includes.sidebar-nav-item')
            @endcan
        @endif
        @if(class_exists('\Modules\Promo\Promocode'))
            @can('promo-management')
                @include('promo::includes.sidebar-nav-item')
            @endcan
        @endif
        @if(class_exists('\Modules\Report\Report'))
            @can('order-management')
                @include('report::includes.sidebar-nav-item')
            @endcan
        @endif

    </ul>
</nav>
<!-- end sidebar -->