<header id="nav-top" class="pt-4">
    <nav class="navbar navbar-light justify-content-between ">
        @isset($back)
        <div class="row pl-3">
            <a href="{{ $back }}" class="btn btn-table circle-table back-head" title="back"></a>
            <h1>{{ $title }}</h1>
        </div>
        @else
        <h1>{{ $title }}</h1>
        @endisset
        <div class="dropdown ml-auto mb-2 mr-2">
            <a class="dropdown-toggle dropdown-toggle-notif" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span data-count="0" class="badge badge-danger">0</span>
                &nbsp;<i class="fa fa-bell"></i>
            </a>
            <div class="dropdown-wrapper">
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                </div>
            </div>
        </div>
        <div class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('admin.setting-dashboard') }}">Setting</a>
                <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal" href="#">Logout</a>
            </div>
        </div>
    </nav>
    <hr>
</header>