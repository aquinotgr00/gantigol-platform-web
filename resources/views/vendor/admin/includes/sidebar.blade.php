<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-drafting-compass"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ config('app.name', 'Laravel') }}</div>
    </a>

    <!-- Divider -->
    @sidebarDivider

    <!-- Nav Item - Dashboard -->
    <li class="nav-item{{ Route::is('admin.dashboard')?' active':'' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    @sidebarDivider
    
    @include('admin::includes.sidebar-nav-item')
    @include('medias::includes.sidebar-nav-item')
    @include('product-category::includes.sidebar-nav-item')

    <!-- Divider -->
    @sidebarDivider

    <!-- Sidebar Toggler (Sidebar) -->
    @sidebarToggler

</ul>