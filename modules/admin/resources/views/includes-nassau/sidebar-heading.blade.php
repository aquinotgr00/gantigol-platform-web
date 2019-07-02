<header id="nav-top" class="pt-4">
    <nav class="navbar navbar-light justify-content-between ">
        @if(isset($data['back']))
        <div class="row pl-3">
            <a href="{{ $data['back'] }}" class="btn btn-table circle-table back-head" title="back"></a>
            <h1>{{ $data['title']??'Summary' }}</h1>
        </div>
        @else
        <h1>{{ $data['title']??'Summary' }}</h1>
        @endif
        <!--<div class="dropdown ml-auto mb-2 mr-2">
            <a class="dropdown-toggle" data-toggle="dropdown">
                <span class="badge badge-danger">4</span>
                &nbsp;<i class="fa fa-bell"></i>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Link 1 </a>
                <a class="dropdown-item" href="#">Link 2</a>
                <a class="dropdown-item" href="#">Link 3</a>
                <a class="dropdown-item" href="#">Link 4</a>
            </div>
        </div>-->
        <div class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->email }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('admin.setting-dashboard') }}">Setting</a>
                <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal" href="#">Logout</a>
            </div>
        </div>
    </nav>
    <hr>
</header>