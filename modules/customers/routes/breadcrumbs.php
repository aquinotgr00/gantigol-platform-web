<?php
Breadcrumbs::for('customer.index', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Customers', route('customer.index'));
});