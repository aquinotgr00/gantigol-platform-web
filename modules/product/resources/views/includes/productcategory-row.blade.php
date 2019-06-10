{{ $parent }}{{ $category['name'] }}
@foreach($category['subcategories']->all() as $subcategory)
    @include('product::includes.productcategory-option', ['category'=>$subcategory, 'parent'=>$parent.$category['name'].' » '])
@endforeach
