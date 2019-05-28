@extends('admin::layout-nassau')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/admin/css/style.datatables.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="{{ asset('vendor/admin/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.bootstrap4.min.js') }}"></script>
@endpush

@section('content')
<!-- start tools -->
<div>
    <tool class="navbar navbar-expand-lg">
        <form class="form-inline my-2 my-lg-0">
            <div class="input-group srch">
                <input type="text" class="form-control search-box" placeholder="Search">
                <div class="input-group-append">
                    <button class="btn btn-search" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
            <a class="btn sub-circle my-2 my-sm-0" href="{{ route('product-variant.create') }}" role="button">
                <img class="add-svg" src="{{ asset('vendor/admin/images/add.svg') }}" alt="add-image">
            </a>
        </form>
    </tool>
</div>
<!-- end tools -->
<hr>
<!-- start table -->
<div class="table-responsive">
    <table class="table" id="dataTable">
        <thead>
            <tr>
                <th scope="col">Product Variant</th>
                <th scope="col">SKU</th>
                <th scope="col">Current Stock</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>
                    <img src="images/product-images/gg-01.jpeg" alt="#">
                </th>
                <td><a href="{{ route('product.show',1) }}">T-SHIRT GG BLACK <span>»</span> <span>M</span></a></td>
                <td>100</td>
                <td>150.000</td>
                <td>
                    <a href="#" class="btn btn-table circle-table edit-table" data-toggle="tooltip" data-placement="top"
                        title="Edit"></a>
                    <a href="#" class="btn btn-table circle-table adjustment-table" data-toggle="tooltip"
                        data-placement="top" title="Adjustment"></a>
                    <a href="#" class="btn btn-table circle-table show-table" data-toggle="tooltip" data-placement="top"
                        title="Hide On Website"></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<!-- end table -->
@endsection

@push('scripts')
<script>
    function deleteItem(id) {
        if (confirm("Are u sure?")) {
            console.log(id);
        }
    }

    $(document).ready(function () {
        
        var datatables = $('#dataTable').DataTable({
            "ajax": {
                "url": '{{ route("items-variant.index") }}',
                "type": 'GET',
                "data": {
                    'status': 'publish'
                }
            },
            "order": [[1, "desc"]],
            "columns": [
                {
                    "data": "variant",
                    "render": function (data, type, row) {
                        
                        if(data == null){
                            return '-';
                        }else{
                            return '<a href="{{ url("admin/product-variant") }}/' + row.id + '">' + row.name + ' ' + data.toUpperCase() + '</a>';
                        }
                        
                    }
                },
                { "data": "sku" },
                { "data": "quantity_on_hand" },
                {
                    "data": "price",
                    "render": function (data, type, row) {
                        return "Rp " + data.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                    }
                },
                {
                    "data": "id",
                    "render": function (data, type, row) {
                        var button = '<a href="{{ url("admin/product-variant") }}/' + data + '/edit" class="btn btn-table circle-table edit-table" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></a>';
                        button += '<button type="button" onclick="deleteItem('+data+')" class="btn btn-table circle-table delete-table" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></button>';
                        return button;
                    }
                }
            ]
        });
    });
</script>
@endpush