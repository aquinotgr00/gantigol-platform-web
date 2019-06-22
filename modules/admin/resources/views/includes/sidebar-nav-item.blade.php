@php
if(isset($menuItem)) {
    extract($menuItem);
}
@endphp
<li>
    <a href="{{ route($routeName) }}" {{ Route::is($routeName)? 'class=active' :'' }}>
        {{ $title }}
    </a>
</li>