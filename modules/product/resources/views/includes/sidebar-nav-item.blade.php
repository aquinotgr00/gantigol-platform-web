<!-- Nav Item - Product -->
@php 
$submenuItems = [];
$user = Auth::user();

if (Gate::forUser($user)->allows('view-product-category')) {
    $submenuItems[] = [
        'routeName'=>'product-categories.index',
        'title'=>'Product Categories'
    ];
}

if (Gate::forUser($user)->allows('view-product-variant')) {
    $submenuItems[] = [
        'routeName'=>'product-variant.index',
        'title'=>'Product Variants'
    ];
}

if (Gate::forUser($user)->allows('view-product-size-chart')) {
    $submenuItems[] = [
        'routeName'=>'product-size-chart.index',
        'title'=>'Product Size Charts'
    ];
}

if (Gate::forUser($user)->allows('view-product')) {
    $submenuItems[] = [
        'routeName'=>'product.index',
        'title'=>'Products'
    ];
}

if (Gate::forUser($user)->allows('set-adjustment')) {
    $submenuItems[] = [
        'routeName'=>'adjustment.index',
        'title'=>'Inventory'
    ];
}

@endphp 

@sidebarSubmenuNav([
    'submenu'=>'product',
    'title'=>'Product Management',
    'submenuItems'=> $submenuItems,
    'expandables'=>[
        'product-categories.create',
        'product-variant.create'
    ]
])