@if(
    isset($category_id) &&
    $category->id == $category_id
) 
{{ $parent }}{{ $category['name'] }}
@endif
@foreach($category['subcategories']->all() as $subcategory) 
    
    @include('product::includes.productcategory-row', ['category'=>$subcategory, 'parent'=>$parent.$category['name'].' » '])
    
@endforeach