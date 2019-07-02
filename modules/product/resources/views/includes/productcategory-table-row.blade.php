<tr>
    <td>
        @if(method_exists($category['image'],'getUrl'))
        <img src="{{ $category['image']->getUrl() }}" style="width:50px;" />
        @endif
    </td>
    <td>{{ $parent }}{{ $category['name'] }}</td>
    <td>
        <a href="{{ route('product-categories.edit',['category'=>$category]) }}" class="btn btn-table circle-table edit-table" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></a>
        
        @if($category->checkIfHasOneItem($category['id']))

        <a href="#" onclick="deleteItem({{ $category->id }})" class="btn btn-table circle-table delete-table" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></a>

        @endif
    </td>
</tr>
@foreach($category['subcategories']->all() as $subcategory)
@include('product::includes.productcategory-table-row', ['category'=>$subcategory, 'parent'=>$parent.$category['name'].'
» ', 'parentSizeCodes'=> ''])
@endforeach