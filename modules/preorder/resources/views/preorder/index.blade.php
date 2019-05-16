@extends('admin::layout-nassau')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
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
            "order": [[2, "asc"]],
            "columns": [
                {
                    "data": "product.image",
                    "render": function (data, type, row) {
                        if (data == null) {
                            return '-';
                        } else {
                            return '<img src="{{ asset("storage") }}/' + data + '" style="width:100%;height:100%;" />';
                        }
                    }
                },
                {
                    "data": "product.name",
                    "render": function (data, type, row) {
                        return '<a href="{{ url("admin/preorder-transaction") }}/' + row.id + '">' + data + '</a>';
                    }
                },
                { "data": "end_date" },
                { "data": "order_received" },
                {
                    "data": "product.price",
                    "render": function (data, type, row) {
                        return "Rp " + data.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                    }
                },
                {
                    "data": "id",
                    "render": function (data, type, row) {
                        var button = '';
                        if ($('input[name="edit-preorder"]').length == 1) {
                            button += '<a href="{{ url("admin/list-preorder/") }}/' + data + '/edit" class="btn btn-table circle-table edit-table" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></a>';
                        }
                        button += '<a href="#" class="btn btn-table circle-table show-table" data-id="' + data + '" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hide On Website" aria-describedby="tooltip856046"></a>';

                        return button;
                    }
                }

            ]
        });
        
        $('#dataTable_filter').css('display','none');

        $('#search').on('keyup', function () {
            
            datatables.search(this.value).draw();
        });
    });
</script>
@endpush

@section('content')

@can('edit-preorder')
<input type="hidden" name="edit-preorder" value="1">
@endcan
<!-- start tools -->
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
<!-- end tools -->

<!-- start table -->
<div class="table-responsive">
    <table class="table" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
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