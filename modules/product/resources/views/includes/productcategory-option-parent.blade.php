<option value="{{ $category['id'] }}"
    {{ (isset($selected) && $selected->parent_id == $category['id'])? 'selected' : '' }} >
    {{ $parent }}
    {{ $category['name'] }}
</option>
@foreach($category['subcategories']->all() as $subcategory)
    @include('product::includes.productcategory-option-parent', ['category'=>$subcategory, 'parent'=>$parent.$category['name'].' » '])
@endforeach
