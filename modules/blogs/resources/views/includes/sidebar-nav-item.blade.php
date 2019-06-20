<!-- Nav Item - Blog -->
<li>
    <a href="#blogSubmenu" data-toggle="collapse" aria-expanded="false">Content Management</a>
    <ul class="collapse {{ (Route::is('blog.*') or Route::is('banner.*') or Route::is('banner-category.*'))? 'show' : '' }} list-unstyled" id="blogSubmenu">
        <li><a href="{{ route('banner-category.index') }}" {{ (Route::is('banner-category.*'))? 'class=active' : '' }}>Banner Placement</a></li>
        <li><a href="{{ route('banner.index') }}" {{ (Route::is('banner.*'))? 'class=active' : '' }}>Banner</a></li>
        <li><a href="{{ route('blog.category.index')}}" {{ (Route::is('blog.category.*'))? 'class=active' : '' }}>Post Category</a></li>
        <li><a href="{{ route('blog.index') }}" {{ (Route::is('blog.*') && (!Route::is('blog.category.*')))? 'class=active' : '' }}>Post</a></li>
    </ul>
</li>