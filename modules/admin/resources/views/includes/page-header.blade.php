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
        <div class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
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