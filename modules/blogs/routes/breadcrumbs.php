<?php
Breadcrumbs::for('blog.index', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Post List', route('blog.index'));
});