<!-- Nav Item - Ecommerce-->
@php 
$submenuItems = [];
$user = Auth::user();

if (Gate::forUser($user)->allows('view-paid-order')) {
    $submenuItems[] = [
        'routeName'=>'paid-order.index',
        'title'=>'Paid Order'
    ];
}

if (Gate::forUser($user)->allows('view-order-transaction')) {
    $submenuItems[] = [
        'routeName'=>'order-transaction.index',
        'title'=>'Transaction'
    ];
}

@endphp 

@sidebarSubmenuNav([
    'submenu'=>'ecommerce',
    'title'=>'Order Management',
    'submenuItems'=> $submenuItems,
    'expandables'=> []
])