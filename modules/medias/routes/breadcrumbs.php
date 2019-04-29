<?php
Breadcrumbs::for('media.library', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Media Library', route('media.library'));
});

