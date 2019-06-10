<option value="{{ $category['id'] }}"{{($category['id']==($selected ?? 0))?' selected':''}}>{{ $parent }}{{ $category['name'] }}</option>
@foreach($category['subcategories']->all() as $subcategory)
    @include('product::includes.productcategory-option', ['category'=>$subcategory, 'parent'=>$parent.$category['name'].' » '])
@endforeach
