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

        @php

        $notifications = \Auth::user()->unreadNotifications()->get();
        $notifications_count = count($notifications);

        @endphp

        <div class="dropdown ml-auto mb-2 mr-2">
            <a class="dropdown-toggle dropdown-toggle-notif" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span data-count="{{ $notifications_count }}" class="badge badge-danger">{{ $notifications_count }}</span>
                &nbsp;<i class="fa fa-bell"></i>
            </a>
            <div class="dropdown-wrapper">
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    @if(isset($notifications))
                    @foreach($notifications as $key => $notif)
                    @if(isset($notif->data['preorder']) && isset($notif->data['product']))
                    <a class="dropdown-item" href="{{ route('list-preorder.show',$notif->data['preorder']['id']) }} ">
                        {{ $notif->data['product']['name'] }} quota is fulfilled.
                    </a>
                    @endif
                    @endforeach
                    <a class="dropdown-item text-danger" href="{{ route('preorder.notification.mark-as-read') }}"
                        onclick="return (confirm('Are  you sure?'))">
                        Mark As Read
                    </a>
                    @endif
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