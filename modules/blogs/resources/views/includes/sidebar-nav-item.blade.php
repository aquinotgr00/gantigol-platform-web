<!-- Nav Item - Blog -->
<li>
    <a href="#blogSubmenu" data-toggle="collapse" aria-expanded="true">Content Management</a>
    <ul class="collapse  show list-unstyled" id="blogSubmenu">
        <li><a href="{{ route('banner-category.index') }}">Banner Placement</a></li>
        <li><a href="{{ route('banner.index') }}">Banner</a></li>
        <li><a href="{{ route('blog.category.index')}}" {{ (Route::is('blog/category/*'))? 'class=active' : '' }}>Post Category</a></li>
        <li><a href="{{ route('blog.index') }}" {{ (Route::is('blog.*') && (!Route::is('blog/category/*')))? 'class=active' : '' }}>Post</a></li>
    </ul>
</li>