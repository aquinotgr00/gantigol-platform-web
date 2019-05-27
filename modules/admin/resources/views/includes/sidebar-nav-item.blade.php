<!-- Nav Item - Users -->
@can('view-users')
<li class="nav-item{{ Route::is('users.index')?' active':'' }}">
    <a class="nav-link" href="{{ route('users.index') }}">
        <i class="fas fa-users"></i>
        <span>Users</span>
    </a>
</li>
@endcan