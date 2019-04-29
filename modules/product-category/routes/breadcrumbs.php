<?php
Breadcrumbs::for('product-categories.index', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Product Categories', route('product-categories.index'));
});

Breadcrumbs::for('product-categories.create', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Product Categories', route('product-categories.index'));
    $trail->push('Create', route('product-categories.create'));
});

Breadcrumbs::for('product-categories.edit', function ($trail, $product_category) {
    $trail->parent('admin.dashboard');
    $trail->push('Product Categories', route('product-categories.index'));
    $trail->push($product_category->name, route('product-categories.edit', $product_category));
});