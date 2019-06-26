<!-- Nav Item - Blog -->
<li>
    <a href="#blogSubmenu" data-toggle="collapse" aria-expanded="false">Content Management</a>
    <ul class="collapse {{ (Route::is('blog.*') or Route::is('banner.*') or Route::is('banner-category.*'))? 'show' : '' }} list-unstyled" id="blogSubmenu">
    	 @can('view-category-banner')
        <li><a href="{{ route('banner-category.index') }}" {{ (Route::is('banner-category.*'))? 'class=active' : '' }}>Banner Placement</a></li>
         @endcan

         @can('view-banner')
        <li><a href="{{ route('banner.index') }}" {{ (Route::is('banner.*'))? 'class=active' : '' }}>Banner</a></li>
         @endcan

         @can('view-category-post')
        <li><a href="{{ route('blog.category.index')}}" {{ (Route::is('blog.category.*'))? 'class=active' : '' }}>Post Category</a></li>
        @endcan

        @can('view-post')
        <li><a href="{{ route('blog.index') }}" {{ (Route::is('blog.*') && (!Route::is('blog.category.*')))? 'class=active' : '' }}>Post</a></li>
        @endcan
    </ul>
</li>