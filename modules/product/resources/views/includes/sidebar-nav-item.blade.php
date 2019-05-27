<!-- Nav Item - Product -->
<li>
    <a href="#productSubmenu" data-toggle="collapse" aria-expanded="true">Product Management</a>
    <ul class="collapse  show list-unstyled" id="productSubmenu">
        <li><a href="{{ route('product-categories.index') }}" {{ (Route::is('product-categories.index'))? 'class=active' : '' }}>Product Categoies</a></li>
        <li><a href="{{ route('product-variant.index') }}" {{ (Route::is('product-variant.index'))? 'class=active' : '' }}>Product Variant</a></li>
        <li><a href="{{ route('product-size-chart.index') }}" {{ (Route::is('product-size-chart.index'))? 'class=active' : '' }}>Product Size Chart</a></li>
        <li><a href="{{ route('product.index') }}" {{ (Route::is('product.index'))? 'class=active' : '' }}>Product</a></li>
    </ul>
</li>