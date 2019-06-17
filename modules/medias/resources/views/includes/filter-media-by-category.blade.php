<button class="btn btn-outline-secondary dropdown-toggle" type="button" id="filter-media-by-category" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    All Categories
</button>
<div class="dropdown-menu" aria-labelledby="filter-media-by-category">
    @foreach($mediaCategories as $category)
        <a class="dropdown-item" href="#">{{ $category->title }}</a>
    @endforeach
</div>