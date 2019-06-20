<option value="{{ $category['id'] }}"
    {{ (isset($selected) && !is_null($selected) && $selected->id == $category['id'])? 'selected' : '' }} >
    {{ $parent }}
    {{ $category['name'] }}
</option>
@foreach($category['subcategories']->all() as $subcategory)
    @include('product::includes.productcategory-option', ['category'=>$subcategory, 'parent'=>$parent.$category['name'].' » '])
@endforeach
