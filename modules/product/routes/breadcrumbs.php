<?php
Breadcrumbs::for('product.index', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Product Items', route('product.index'));
});