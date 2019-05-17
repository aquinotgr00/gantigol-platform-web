@extends('admin::layout-nassau')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('vendor/admin/js/jquery/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.select.min.js') }}"></script>

<script>
    function titleCase(str) {
        str = str.toLowerCase().split(' ');
        let final = [];
        for (let word of str) {
            final.push(word.charAt(0).toUpperCase() + word.slice(1));
        }
        return final.join(' ')

    }
    $(document).ready(function () {
        var datatables = $('#dataTable').DataTable({
            "ajax": {
                "url": '{{ route("customers.index") }}',
                "type": 'GET',
                "data": {
                    'status': 'publish'
                }
            },
            "order": [[2, "asc"]],
            "columns": [
                {
                    "data": "name",
                    "render": function (data, type, row) {
                        return '<a href="{{ url("admin/list-customer") }}/' + row.id + '">' + titleCase(data) + '</a>';
                    }
                },
                { "data": "email" },
                { "data": "phone" },
                { "data": "created_at" },
                { "data": "updated_at" }
            ]
        });

        $('#dataTable_filter').css('display', 'none');

        $('#search').on('keyup', function () {

            datatables.search(this.value).draw();
        });
    });
</script>
@endpush

@section('content')
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
            <a class="btn sub-circle my-2 my-sm-0" href="{{ route('list-customer.create') }}" role="button">
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
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Registered</th>
                <th scope="col">Last Order</th>
            </tr>
        </thead>
        <tbody>
    </table>
</div>
<!-- end table -->

@endsection