@extends('admin::layout-nassau')

@section('content')
<!-- start form -->
<div class="row pl-3">
    <div class="col-4">
        <div class="text-right">
            <a href="{{ route('product-variant.edit',$productVariant->id) }}">Edit</a>
        </div>
    </div>
</div>
<div class="row pl-3">
    <div class="col">
        <div class="form-group">
            <label>Variant Attribute Name</label>
            <h4>{{ $productVariant->attribute }}</h4>
        </div>
    </div>
</div>
<div class="row pl-3">
    <div class="col">
        <div class="form-group">
            <label>Attribute Value</label>
            <h4>{{ $productVariant->value }}</h4>
        </div>
    </div>
</div>

<!-- end form -->

@endsection