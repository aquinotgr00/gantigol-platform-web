@extends('admin::layout-nassau')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/admin/css/style.datatables.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('vendor/admin/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.bootstrap4.min.js') }}"></script>

<script>
    $(document).ready(function () {
        var delay = (function () {
            var timer = 0;
            return function (callback, ms, that) {
                clearTimeout(timer);
                timer = setTimeout(callback.bind(that), ms);
            };
        })();

        var datatables = $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route("list-preorder.index") }}',
                method: 'GET'
            },
            columns: [{
                data: 'product.created_at'
            },
            {
                data: 'image'
            },
            {
                data: 'product.name'
            },
            {
                data: 'end_date'
            },
            {
                data: 'order_received'
            },
            {
                data: 'product.price'
            },
            {
                data: 'action'
            },
            ],
            order: [
                [0, "desc"]
            ],
            columnDefs: [{
                "targets": [0],
                "visible": false,
                "searchable": false
            }]
        });

        $('#dataTable_filter').css('display', 'none');

        $('#search').on('keyup', function () {
            delay(function () {
                datatables.search(this.value).draw();
            }, 1000, this);
        });
    });
</script>
@endpush

@section('content')

@can('edit-preorder')
<input type="hidden" name="edit-preorder" value="1">
@endcan
<!-- start tools -->
<div class="row mb-3">
    <div class="col">
        <div>
            <tool class="navbar navbar-expand-lg">
                <form class="form-inline my-2 my-lg-0">
                    <div class="input-group srch">
                        <input type="search" id="search" class="form-control search-box" placeholder="Search">
                        <div class="input-group-append">
                            <button class="btn btn-search" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                    @can('create-preorder')
                    <a class="btn sub-circle my-2 my-sm-0" href="{{ route('list-preorder.create') }}" role="button">
                        <img class="add-svg" src="{{ asset('vendor/admin/images/add.svg') }}" alt="add-image">
                    </a>
                    @endcan
                </form>
            </tool>
        </div>
    </div>
</div>
<!-- end tools -->
<div class="alert-notifications">
    <div class="item-notification"></div>
</div>
<i data-count="0" class="count-notification"></i>
<!-- start table -->
<div class="table-responsive">
    <table class="table" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Product Name</th>
                <th>Po Due</th>
                <th>Order Received</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
    </table>
</div>
<!-- end table -->

@endsection