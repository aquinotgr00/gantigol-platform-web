@extends('admin::layout-nassau')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
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
            <a class="btn sub-circle my-2 my-sm-0" href="{{ route('product-size-chart.create') }}" role="button">
                <img class="add-svg" src="{{ asset('vendor/admin/images/add.svg') }}" alt="add-image">
            </a>
        </form>
    </tool>
</div>
<!-- end tools -->
<hr/>
<!-- start table -->
<div class="table-responsive">
    <table class="table" id="dataTable">
        <thead>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Codes</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
    </table>
</div>
<!-- end table -->
@endsection

@push('scripts')
<script>

    $(document).ready(function () {
        var datatables = $('#dataTable').DataTable({
            "ajax": {
                "url": '{{ route("items-size.index") }}',
                "type": 'GET'
            },
            "order": [[1, "desc"]],
            "columns": [
                {
                    "data": "image",
                    "render": function (data, type, row) {
                        if (data == null || data.trim().length == 0) {
                            return '-';
                        } else {
                            
                            var url = data.replace("public", "storage");
                            //return '<img src="{{ url("/") }}/' + url + '" style="width:100%;height:100%;" />';
                            return '<a href="{{ url("/") }}/' + url + '" target="_blank">Preview</a>';
                        }
                    }
                },
                {
                    "data": "name",
                    "render": function (data, type, row) {
                        return '<a href="{{ url("admin/product-size-chart") }}/' + row.id + '">'+data+'</a>';
                    }
                },
                { "data": "codes" },
                {
                    "data": "id",
                    "render": function (data, type, row) {
                        var button = '<a href="{{ url("admin/product-size-chart") }}/'+data+'/edit" class="btn btn-table circle-table edit-table" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></a>';
                        return button;
                    }
                }
            ]
        });

    });

</script>
@endpush