@extends('admin::layout-nassau')

@push('scripts')

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
            }],
            drawCallback: function(settings) {
                $('[data-toggle="tooltip"]').tooltip()
            }
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

@indexPage(['title'=>'Preorders', 'addNewAction'=>route('list-preorder.create')])

<div class="alert-notifications">
    <div class="item-notification"></div>
</div>
<i data-count="0" class="count-notification"></i>

<!-- start table -->
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
<!-- end table -->
@endindexPage
@endsection