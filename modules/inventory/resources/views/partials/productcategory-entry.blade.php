@if(!is_null($productCategory))

@if($productCategory->parentCategories || $productCategory->parent_categories)
    @include('partials.productcategory-entry', [ 'productCategory' => $productCategory->parentCategories??$productCategory->parent_categories ])
    &nbsp;&raquo;&nbsp;
@endif
{{ $productCategory->name }}

@endif