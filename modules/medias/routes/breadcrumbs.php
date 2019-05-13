<?php
Breadcrumbs::for('media.library', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Media Library', route('media.library'));
});

Breadcrumbs::for('media.library.example.single', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Media Library', route('media.library'));
    $trail->push('Example');
    $trail->push('Single media select or upload');
});

Breadcrumbs::for('media.library.example.multiple', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Media Library', route('media.library'));
    $trail->push('Example');
    $trail->push('Multiple media select or uploads');
});

Breadcrumbs::for('media.library.example.combine', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Media Library', route('media.library'));
    $trail->push('Example');
    $trail->push('Both single and multiple');
});

Breadcrumbs::for('media.library.example.wysiwyg', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Media Library', route('media.library'));
    $trail->push('Example');
    $trail->push('WYSIWYG');
});
