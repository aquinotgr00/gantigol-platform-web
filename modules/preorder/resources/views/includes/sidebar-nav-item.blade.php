<!-- Nav Item - Preorder-->
<li>
    <a href="#preorderSubmenu" data-toggle="collapse" aria-expanded="true" class="">Preorder Management</a>
    <ul class="list-unstyled collapse show" id="preorderSubmenu" style="">
        <li>
            <a  {{ (Route::is('list-preorder.index'))? 'class=active' : '' }} href="{{ route('list-preorder.index') }}">
                <i class="fas fa-clock"></i>
                <span>Pre-Order</span>
            </a>
        </li>
        <li>
            <a  {{ (Route::is('setting-preorder.index'))? 'class=active' : '' }} href="{{ route('setting-preorder.index') }}">
                <i class="fas fa-cog"></i>
                <span>Setting</span>
            </a>
        </li>
    </ul>
</li>