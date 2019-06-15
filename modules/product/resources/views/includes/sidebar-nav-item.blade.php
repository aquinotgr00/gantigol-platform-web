<!-- Nav Item - Product -->
<li>
    <a href="#productSubmenu" data-toggle="collapse" aria-expanded="true">Product Management</a>
    <ul class="collapse list-unstyled" id="productSubmenu">
        @sidebarNavItem(['routeName'=>'product-categories.index','title'=>'Product Categories'])
        @sidebarNavItem(['routeName'=>'product-variant.index','title'=>'Product Variants'])
        @sidebarNavItem(['routeName'=>'product-size-chart.index','title'=>'Product Size Charts'])
        @sidebarNavItem(['routeName'=>'product.index','title'=>'Products'])
    </ul>
</li>