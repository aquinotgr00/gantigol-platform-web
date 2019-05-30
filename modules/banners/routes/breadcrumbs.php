<?php
Breadcrumbs::for('banner.index', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Banner List', route('banner.index'));
});