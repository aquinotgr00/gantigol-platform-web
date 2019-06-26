@extends('admin::layout-nassau')

@push('scripts')
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
                "type": 'GET'
            },
            "order": [[2, "asc"]],
            "columns": [
                {
                    "data": "name",
                    "render": function (data, type, row) {
                        return '<a href="{{ url("admin/list-customer") }}/' + row.id + '">' + data + '</a>';
                    }
                },
                { "data": "email" },
                { "data": "phone" },
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
@indexPage(['title'=>'Customers'])
<!-- start table -->
<div class="table-responsive">
    <table class="table" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Last Order</th>
            </tr>
        </thead>
        <tbody>
    </table>
</div>
<!-- end table -->
@endindexPage
@endsection