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
        var datatables = $('#dataTable').DataTable({
            "ajax": {
                "url": '{{ route("preorder.by-status") }}',
                "type": 'GET',
                "data": {
                    'status': 'publish'
                }
            },
            "order": [[0, "desc"]],
            "columns": [
                {
                    data : 'product.created_at'
                },
                {
                    "data": "product.image",
                    "render": function (data, type, row) {
                        if (data == null) {
                            return '-';
                        } else {
                            return '<img src="' + data + '" style="width:50px;" />';
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
                        button += '<a href="{{ url("admin/product/set-visible") }}/'+row.product_id+'"'; 
                        
                        if (row.product.visible == 1) {
                            button += 'class="btn btn-table circle-table show-table" title="Hide On Website"';
                        }else{
                            button += 'class="btn btn-table circle-table hide-table" title="Show On Website"';
                        }

                        button +='data-toggle="tooltip" ';
                        button +='data-placement="top" >';
                        button +='</a>';
                        return button;
                    }
                }

            ],
            order: [[ 0, "desc" ]],
            columnDefs : [{
                "targets": [0],
                "visible": false,
                "searchable": false
            }]
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
<hr>
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