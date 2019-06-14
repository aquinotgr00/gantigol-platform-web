@extends('admin::layout-nassau')

@section('content')
<!-- start form -->
<div class="row pl-3">
    <form action="{{ route('product-variant.store') }}" method="POST" class="col-md-6 col-lg7 pl-0">
        @csrf
        <div class="form-group">
            <label>Variant Attribute Name</label>
            <input type="text" name="attribute"
                class="form-control{{ $errors->has('attribute') ? ' is-invalid' : '' }}" id="attribute">
            @if ($errors->has('attribute'))
            <div class="invalid-feedback">{{ $errors->first('attribute') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label>Attribute Value</label>
            <input type="text" name="value"
                class="form-control{{ $errors->has('value') ? ' is-invalid' : '' }}" id="value">
            @if ($errors->has('value'))
            <div class="invalid-feedback">{{ $errors->first('value') }}</div>
            @endif
            <small>Comma separated attribute for example: S,M,L,XL</small>
        </div>
        <div class="float-right">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>

</div>

<!-- end form -->

@endsection