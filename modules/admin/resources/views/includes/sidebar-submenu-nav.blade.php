@php
use Illuminate\Support\Arr;

$expanded = in_array(Route::currentRouteName(), array_merge(Arr::pluck($submenuItems,'routeName'),$expandables));

@endphp
<li>
    <a href="#{{ $submenu }}Submenu" data-toggle="collapse" aria-expanded="{{ $expanded?'true':'false' }}">{{ $title }}</a>
    <ul class="collapse {{ $expanded?'show':'' }} list-unstyled" id="{{ $submenu }}Submenu">
        @each('admin::includes.sidebar-nav-item', $submenuItems, 'menuItem')
    </ul>
</li>