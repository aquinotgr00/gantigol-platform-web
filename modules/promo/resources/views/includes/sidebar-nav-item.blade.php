<!-- Nav Item - Blog -->
<li>
    <a href="#promoSubmenu" data-toggle="collapse" aria-expanded="false">Promo Management</a>
    <ul class="collapse  {{ (Route::is('promo.*'))? 'show' : '' }} list-unstyled" id="promoSubmenu">
        <li><a href="{{ route('promo.index') }}"{{ (Route::is('promo.*') )? 'class=active' : '' }}>List</a></li>
     </ul>
</li>