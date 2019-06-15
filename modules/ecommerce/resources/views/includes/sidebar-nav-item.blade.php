<!-- Nav Item - Preorder-->
<li>
    <a href="#orderSubmenu" data-toggle="collapse" aria-expanded="true" class="">Order Management</a>
    <ul class="list-unstyled collapse" id="orderSubmenu" style="">
        <li>
            <a  {{ (Route::is('paid-order.index'))? 'class=active' : '' }} href="{{ route('paid-order.index') }}">
                <span>Paid Order</span>
            </a>
        </li>
        <li>
            <a  {{ (Route::is('order-transaction.index'))? 'class=active' : '' }} href="{{ route('order-transaction.index') }}">
                <span>Transaction</span>
            </a>
        </li>
    </ul>
</li>