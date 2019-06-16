{{ $category['id'] }};{{ $parent }}{{ $category['name'] }};{{ ($category['image_id'] > 0)? $category->image->getURL() : ''   }}^
@foreach($category['subcategories']->all() as $subcategory)
    @include('product::includes.productcategory-api', ['category'=>$subcategory, 'parent'=>$parent.$category['name'].' » '])
@endforeach