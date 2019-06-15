<!-- Nav Item - Preorder-->
<li>
    <a href="#preorderSubmenu" data-toggle="collapse" aria-expanded="true" class="">Preorder Management</a>
    <ul class="list-unstyled collapse" id="preorderSubmenu" style="">
        <li>
            <a  {{ (Route::is('list-preorder.index'))? 'class=active' : '' }} href="{{ route('list-preorder.index') }}">
                <span>Pre-Order</span>
            </a>
        </li>
        <li>
            <a  {{ (Route::is('all-transaction.index'))? 'class=active' : '' }} href="{{ route('all-transaction.index') }}">
                <span>Transaction</span>
            </a>
        </li>
    </ul>
</li>