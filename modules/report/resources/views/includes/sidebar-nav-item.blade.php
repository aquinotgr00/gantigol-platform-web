<!-- Nav Item - Report -->
<li>
    <a href="#reportSubmenu" data-toggle="collapse" aria-expanded="false">Report Management</a>
    <ul class="collapse {{ (Route::is('report.*'))? 'show' : '' }} list-unstyled" id="reportSubmenu">
        <li><a href="{{ route('report.sales.index') }}" {{ (Route::is('report.sales.*'))? 'class=active' : '' }}>Sales</a></li>
        <li><a href="{{ route('report.variants.index') }}" {{ (Route::is('report.variants.*'))? 'class=active' : '' }}>Variants</a></li>
    </ul>
</li>