@extends('admin::layout-nassau')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/admin/css/style.datatables.css') }}" rel="stylesheet">
<style>
    .add-img-featured {
        padding: 10px;
    }

    .img-thumbnail {
        object-fit: scale-down;
    }
</style>
@endpush

@push('scripts')
<script src="{{ asset('vendor/admin/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.bootstrap4.min.js') }}"></script>
@endpush

@section('content')

<div class="row pl-3">
    <form class="col-md-6 col-lg7 pl-0">
        <div class="form-group">
            <label for="exampleInputCategoryName">{{ ucwords($product->name) }}</label>
            {!! $product->description !!}
        </div>
        <div class="form-group">
            <label>Price</label>
            <p>
                {{ number_format($product->price) }}
            </p>
        </div>
        <div class="form-group">
            <label>Category</label>
            <p>
                @if(isset($categories) && ($categories))
                @foreach ($categories->all() as $category)

                @include('product::includes.productcategory-row', ['category'=>$category, 'parent'=>'','category_id'=>
                $product->category_id ])

                @endforeach
                @endif
            </p>
        </div>

        <div>
            <label>Product Variants</label>
        </div>
        <div class="table-responsive">
            <table class="table" id="dataTable">
                <thead>
                    <tr>
                        <th scope="col">SKU</th>
                        <th scope="col">Size Code</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                @if(!is_null($variants))
                <tbody>
                    @foreach($variants as $key => $value)
                    <tr>
                        <td>{{ $value->sku }}</td>
                        <td>{{ $value->size_code }}</td>
                        <td>{{ $value->quantity_on_hand }}</td>
                        <td>{{ number_format($value->price) }}</td>
                    </tr>
                    @endforeach
                </tbody>
                @endif
            </table>
        </div>
    </form>

    <div class="col-md-4 col-lg-5 pl-5 grs">
        <div class="form-group">
            <label>Featured Image</label><br>
            <img src="{{ $product->image }}" id="img-placeholder" class="img-fluid img-thumbnail add-img-featured " />
        </div>
        <div class="addtional-images">
            @if(isset($product->images))
            @foreach($product->images as $index => $image)
            <input type="hidden" name="images[]" value="{{ $image->image }}" />
            <div class="mb-2 hovereffect float-left">
                <img class="img-fluid img-thumbnail img-additional-size" src="{{ $image->image }}">
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    $(function() {
        $('#dataTable').dataTable();
    });
</script>
@endpush