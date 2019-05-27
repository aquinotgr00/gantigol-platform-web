@extends('admin::layout-nassau')

@section('content')
<!-- start form -->
<div class="row pl-3">
    <form action="{{ route('product-variant.update',$productVariant->id) }}" class="col-md-6 col-lg7 pl-0" method="post">
        @csrf
        {{ method_field('PUT') }}
        <div class="form-group">
            <label for="">Variant</label>
            <input type="text" class="form-control" name="variant" value="{{ $productVariant->variant }}" />
        </div>
        <div class="form-group">
            <label for="">SKU</label>
            <input type="text" class="form-control" name="sku" value="{{ $productVariant->sku }}" />
        </div>
        <div class="form-group">
            <label for="">Size Code</label>
            <input type="text" class="form-control" name="size_code" value="{{ $productVariant->size_code }}" />
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <input type="text" class="form-control" name="price" value="{{ $productVariant->price }}" />
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Safety Stock</label>
                    <input type="text" class="form-control" name="safety_stock"
                        value="{{ $productVariant->safety_stock }}" />
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Qty on Hand</label>
                    <input type="text" class="form-control" name="quantity_on_hand"
                        value="{{ $productVariant->quantity_on_hand }}" />
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea name="description" id="productDescription" class="form-control"
                rows="3">{{ $productVariant->description }}</textarea>
        </div>
        <div class="float-right">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>

    <div id="dropzone" class="col-md-4 col-lg-5 pl-5 grs">
        <label for="exampleFormControlSelect1">Product Variant Image</label>
        <form class="dropzone needsclick dz-clickable" id="demo-upload" action="#">
            <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
        </form>
        <small><span>Image size must be 1920x600 with maximum file size</span>
            <span>400 kb</span></small>
    </div>

</div>
<!-- end form -->
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script
    src="{{ asset('vendor/product/vendor/tinymce/tinymce.min.js?apiKey=jv18ld1zfu6vffpxf0ofb72orrp8ulyveyyepintrvlwdarp') }}">
    </script>
<script>
    $(function () {
        tinymce.init({
            selector: '#productDescription'
        });
    });
</script>