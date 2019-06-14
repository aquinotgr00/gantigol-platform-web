@extends('admin::layout-nassau')

@section('content')
<!-- start form -->
<div class="row pl-3">
    <form action="{{ route('product-variant.update',$productVariant->id) }}" method="POST" class="col-md-6 col-lg7 pl-0">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Variant Attribute Name</label>
            <input type="text" name="attribute" class="form-control" value="{{ $productVariant->attribute }}" />
        </div>
        <div class="form-group">
            <label>Attribute Value</label>
            <input type="text" name="value" class="form-control" value="{{ $productVariant->value }}" />
            <small>Comma separated attribute for example: S,M,L,XL</small>
        </div>
        <div class="float-right">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>

</div>

<!-- end form -->

@endsection