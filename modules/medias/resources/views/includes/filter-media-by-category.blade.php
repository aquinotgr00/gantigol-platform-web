<button class="btn btn-outline-secondary dropdown-toggle" type="button" id="filter-media-by-category" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    {{ request()->has('c')?urldecode(request()->query('c')):'All Categories' }}
</button>
<div class="dropdown-menu" aria-labelledby="filter-media-by-category">
    
    @if(request()->has('c'))
    <a class="dropdown-item" href="{{ route('media.library', request()->only('s')) }}">All Categories</a>
    @endif
    
    @foreach($mediaCategories as $category)
    @if(request()->has('c'))
        @if(urldecode(request()->query('c'))!==$category->title)
            <a class="dropdown-item" href="{{ route('media.library', request()->only('s')+['c'=>urlencode($category->title)]) }}">{{ $category->title }}</a>
        @endif
    @else
        <a class="dropdown-item" href="{{ route('media.library', request()->only('s')+['c'=>urlencode($category->title)]) }}">{{ $category->title }}</a>
    @endif
    @endforeach
</div>