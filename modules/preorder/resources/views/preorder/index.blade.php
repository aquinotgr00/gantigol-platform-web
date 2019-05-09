@extends('preorder::layout')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="https://cdn.datatables.net/select/1.3.0/css/select.bootstrap4.min.css" rel="stylesheet">

@endpush

@push('scripts')
<script src="{{ asset('vendor/admin/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.select.min.js') }}"></script>

<script>
    $(document).ready(function () {
        var datatables = $('#dataTable').DataTable({
            "ajax": {
                "url": '{{ route("preorder.by-status") }}',
                "type": 'GET',
                "data": {
                    'status': 'publish'
                }
            },
            "order": [[4, "desc"]],
            "columns": [
                {
                    "data": "product.first_image",
                    "render": function (data, type, row) {
                        if (data == null) {
                            return '-';
                        } else {
                            return '<img src="' + data.product_id + '" style="width:100%;height:100%;" />';
                        }
                    }
                },
                { "data": "product.name" },
                { "data": "end_date" },
                { "data": "order_received" },
                {
                    "data": "product.price",
                    "render": function (data, type, row) {
                        return "Rp " + data.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                    }
                }
            ],
            select: true
        });
        datatables
            .on('click', 'tr', function () {
                var selected = datatables.row(this).data();
                window.location.href = "{{ url('admin/list-preorder') }}" + "/" + selected.id;
            });
    });
</script>
@endpush

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h3>Published Preorder</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('list-preorder.index') }}">Publish</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('list-preorder.draft') }}">Draft</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('list-preorder.closed') }}">Closed</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">

            </div>
            <div class="col-md-2">
                <!-- start tools -->
                <tool class="navbar navbar-expand-lg float-right">
                    <a class="btn sub-circle my-2 my-sm-0" href="{{ route('list-preorder.create') }}" role="button">
                        <img class="add-svg" src="{{ asset('vendor/preorder/images/Add.svg') }}" alt="add-image">
                    </a>
                </tool>
                <!-- end tools -->
            </div>
        </div>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Po Due</th>
                        <th>Order Received</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
            </table>
        </div>
    </div>
</div>

@endsection