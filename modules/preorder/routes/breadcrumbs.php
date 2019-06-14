<?php
Breadcrumbs::for('list-preorder.index', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Pre Order', route('list-preorder.index'));
});
Breadcrumbs::for('list-preorder.create', function ($trail) {
    $trail->parent('list-preorder.index');
    $trail->push('Pre Order', route('list-preorder.create'));
});
Breadcrumbs::for('list-preorder.show', function ($trail) {
    $trail->parent('list-preorder.index');
    $trail->push('Pre Order', route('list-preorder.show'));
});
Breadcrumbs::for('list-preorder.edit', function ($trail) {
    $trail->parent('list-preorder.index');
    $trail->push('Pre Order', route('list-preorder.edit'));
});
Breadcrumbs::for('list-preorder.draft', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Pre Order', route('list-preorder.draft'));
});
Breadcrumbs::for('list-preorder.closed', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Pre Order', route('list-preorder.closed'));
});
Breadcrumbs::for('pending.transaction', function ($trail) {
    $trail->parent('list-preorder.index');
    $trail->push('Pre Order', route('pending.transaction'));
});
Breadcrumbs::for('paid.transaction', function ($trail) {
    $trail->parent('list-preorder.index');
    $trail->push('Pre Order', route('paid.transaction'));
});
Breadcrumbs::for('shipping.transaction', function ($trail) {
    $trail->parent('list-preorder.index');
    $trail->push('Pre Order', route('shipping.transaction'));
});
Breadcrumbs::for('batch.transaction', function ($trail) {
    $trail->parent('list-preorder.index');
    $trail->push('Pre Order', route('batch.transaction'));
});
Breadcrumbs::for('show.transaction', function ($trail) {
    $trail->parent('list-preorder.index');
    $trail->push('Pre Order', route('show.transaction'));
});
Breadcrumbs::for('shipping-edit.transaction', function ($trail) {
    $trail->parent('list-preorder.index');
    $trail->push('Pre Order', route('shipping-edit.transaction'));
});
Breadcrumbs::for('setting-reminder.index', function ($trail) {
    $trail->parent('list-preorder.index');
    $trail->push('Pre Order', route('setting-reminder.index'));
});
Breadcrumbs::for('setting-shipping.index', function ($trail) {
    $trail->parent('list-preorder.index');
    $trail->push('Pre Order', route('setting-shipping.index'));
});
Breadcrumbs::for('setting-shipping.sticker', function ($trail) {
    $trail->parent('list-preorder.index');
    $trail->push('Pre Order', route('setting-shipping.sticker'));
});
