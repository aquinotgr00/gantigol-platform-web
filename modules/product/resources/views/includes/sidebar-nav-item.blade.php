<!-- Nav Item - Product -->
<li>
    <a href="#productSubmenu" data-toggle="collapse" aria-expanded="true">Product Management</a>
    <ul class="collapse  show list-unstyled" id="productSubmenu">
        <li><a href="{{ route('product-categories.index') }}">Product Categoies</a></li>
        <li><a href="#">Product Variant</a></li>
        <li><a href="#">Product Size Chart</a></li>
        <li><a href="{{ route('product.index') }}" {{ (Route::is('product.index'))? 'class=active' : '' }}>Product</a></li>
    </ul>
</li>