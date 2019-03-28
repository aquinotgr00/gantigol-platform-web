<?php
Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push('Dashboard', route('admin.dashboard'));
});

Breadcrumbs::for('users.index', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Users', route('users.index'));
});

Breadcrumbs::for('users.create', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Users', route('users.index'));
    $trail->push('Create', route('users.create'));
});

Breadcrumbs::for('users.edit', function ($trail, $user) {
    $trail->parent('admin.dashboard');
    $trail->push('Users', route('users.index'));
    $trail->push($user->name, route('users.edit', $user));
});
