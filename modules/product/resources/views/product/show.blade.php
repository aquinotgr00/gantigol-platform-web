@extends('admin::layout-nassau')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/admin/css/style.datatables.css') }}" rel="stylesheet">
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
        <div class="row">
            <div class="col-sm form-group">
                <label for="#">SKU</label>
                <p>{{ $productVariant->sku }}</p>
            </div>
            <div class="col-sm form-group">
                <label>Price</label>
                <p>Rp {{ number_format($productVariant->price) }}</p>
            </div>
            <div class="col-sm form-group">
                <label>Stock</label>
                <p>{{ number_format($productVariant->quantity_on_hand) }}</p>
            </div>
            <div class="col-sm form-group">
                <label>Size Code</label>
                <p>{{ $productVariant->size_code }}</p>
            </div>
        </div>
        <div class="form-group">
            <label>Category</label>
            
        </div>
        <div class="mt-3">
            <label>Log Activity</label>
            <hr class="mt-0">
        </div>
        <div class="dropdown mt-4">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter Activity
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Add Stock</a>
                <a class="dropdown-item" href="#">Reduce Stock</a>
                <a class="dropdown-item" href="#">Change Description</a>
                <a class="dropdown-item" href="#">Change Image</a>
            </div>
        </div>
        <input type="hidden" name="activity" />
        <div class="table-responsive" style="margin-top:15px;">
            <table class="table mt-4" id="dataTable">
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Name</th>
                        <th scope="col">Activity</th>
                        <th scope="col">Notes</th>
                    </tr>
                </thead>

            </table>
        </div>
    </form>

    <div id="dropzone" class="col-md-4 col-lg-5 pl-5 grs">

    </div>
</div>

@endsection

@push('scripts')
<script>

    $(function () {

        var dataTable = $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: {
                url: '{{ route("ajax.detail-product-activities",$productVariant->id) }}',
                method: 'POST',
                data : function(d){
                    d._token = "{{ csrf_token() }}",
                    d.activity = $('input[name="activity"]').val()
                }
            },
            order: [[0, "desc"]],
            columns: [
                { data: 'date' },
                { data: 'name' },
                { data: 'activity' },
                { data: 'notes' }
            ]
        });

        $('.dropdown-menu a').on("click", function (e) {
            $('input[name="activity"]').val($(this).text());
            dataTable.draw();
        });

    });
</script>
@endpush