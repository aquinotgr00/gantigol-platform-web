<!-- Nav Item - Product -->
@sidebarSubmenuNav([
    'submenu'=>'product',
    'title'=>'Product Management',
    'submenuItems'=>[
        ['routeName'=>'product-categories.index','title'=>'Product Categories'],
        ['routeName'=>'product-variant.index','title'=>'Product Variants'],
        ['routeName'=>'product-size-chart.index','title'=>'Product Size Charts'],
        ['routeName'=>'product.index','title'=>'Products'],
        ['routeName'=>'adjustment.index','title'=>'Inventory']
    ],
    'expandables'=>[
        'product-categories.create',
        'product-variant.create'
    ]
])