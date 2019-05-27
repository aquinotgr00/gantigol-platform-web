@extends('admin::layout-nassau')

@section('content')

<div class="row pl-3">
    <form class="col-md-6 col-lg7 pl-0">
        <div class="form-group">
            <label for="exampleInputCategoryName">{{ ucwords($product->name) }}</label><br>
            {!! $product->description !!}
        </div>
        <div class="row">

            <div class="col-sm form-group">
                <label>Price</label>
                <p>Rp.{{ number_format($product->price) }}</p>
            </div>
            <div class="col-sm form-group">
                <label>Stock</label>
                <p>200</p>
            </div>
            <div class="col-sm form-group">
                <label>Category</label>
                <p>Men » Top</p>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table mt-4">
                <thead>
                    <tr>
                        <th scope="col">Variant</th>
                        <th scope="col">SKU </th>
                        <th scope="col">Safety Stock </th>
                        <th scope="col">Qty on Hand</th>

                    </tr>
                </thead>
                @if($product->variants->count() > 0)
                <tbody>
                    @foreach($product->variants as $key => $value)
                    <tr>
                            <td>{{ $value->variant }}</td>
                        <td>{{ $value->sku }}</td>
                        <td>{{ $value->safety_stock }}</td>
                        <td>{{ $value->quantity_on_hand }}</td>
                    </tr>
                    @endforeach
                </tbody>
                @endif
            </table>
        </div>
    </form>

    <div id="dropzone" class="col-md-4 col-lg-5 pl-5 grs">
        <label for="exampleFormControlSelect1">Featured Image</label>
        <form class="dropzone no-bg hovereffect" id="demo-upload">
            @if(!is_null($product->images->first()))
            @php
            $product_image = $product->images->first();
            $image_url = str_replace('public','storage',$product_image->image);
            $image_url = url($image_url);
            @endphp
            <img class="img-fluid align-middle" src="{{ $image_url }}" alt="{{ $product->name }}">
            @else
            <img class="img-fluid align-middle"
                src="{{ asset('vendor/admin/images/product-images/sample-upload.png') }}" alt="">
            @endif

            <div class="overlay">
                <div class="row mr-btn">
                    <div class="col pl-4">
                        <a href="#" class="btn btn-table circle-table view-img" data-toggle="tooltip"
                            data-placement="top" title="View"></a>
                    </div>
                    <div class="col pr-4">
                        <a href="#" class="btn btn-table circle-table edit-table" data-toggle="tooltip"
                            data-placement="top" title="Edit"></a>
                    </div>
                </div>

            </div>
        </form>
        <small><span>Image size must be 1920x600 with maximum file size</span>
            <span>400 kb</span></small>
    </div>
</div>

@endsection

@push('scripts')
<script>

</script>
@endpush