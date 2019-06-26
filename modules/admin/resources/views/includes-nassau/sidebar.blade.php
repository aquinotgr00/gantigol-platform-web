<!-- start sidebar -->
<nav class="col-sm-2 sidebar" id="sidebar">
    @php
    $img_logo = asset('vendor/admin/images/logo-nassau.svg');
    @endphp 
    @if(class_exists('\Modules\Admin\SettingDashboard'))
    
    @php
    
    $setting = \Modules\Admin\SettingDashboard::first();
    
    if(isset($setting->logo)){
        $img_logo = $setting->logo;
    }

    @endphp

    @else 
    
    @endif
    <img src="{{ $img_logo }}" class="logo logo-nav" alt="logo nassau">
    <hr>
    <ul class="nav flex-column nav-item">
        @sidebarNavItem(['routeName'=>'admin.dashboard','title'=>'Summary'])
        @sidebarNavItem(['routeName'=>'media.library','title'=>'Media Library'])
        <!-- Nav Item - Users -->
        @can('view-users')
        @sidebarSubmenuNav([
        'submenu'=>'user',
        'title'=>'User Management',
        'submenuItems'=>[
        ['routeName'=>'list-customer.index','title'=>'Customers'],
        ['routeName'=>'list-membership.index','title'=>'Memberships'],
        ['routeName'=>'users.index','title'=>'Administrator']
        ],
        'expandables'=>[
        'users.create',
        'users.edit',
        ]
        ])
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
            @can('report-management')
                @include('report::includes.sidebar-nav-item')
            @endcan
        @endif

    </ul>
</nav>
<!-- end sidebar -->