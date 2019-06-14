<?php
Breadcrumbs::for('promo.index', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Promo List', route('promo.index'));
});