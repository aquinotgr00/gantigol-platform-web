@extends('admin::layout-nassau')

@push('scripts')
<script>
    function resetPreorder(obj) {
        var ajaxRequest = $(obj).data('url');

        if (confirm('Are you sure?')) {

            $.ajax({
                type: 'POST',
                url: ajaxRequest,
                dataType: 'json',
                data: {
                    _token: "{{ csrf_token() }}"
                },
                success: function (res) {
                    if (res.data.id > 0) {
                        alert('Success! Preorder reset from 0');
                        location.reload();
                    } else {
                        console.log(res);
                    }
                }
            });
        }

        return false;
    }

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
            drawCallback: function (settings) {
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

@php

$user = Auth::user();

$args = ['title'=>'Preorders'];

if (Gate::forUser($user)->allows('create-preorder')) {
$args['addNewAction'] = route('list-preorder.create');
}

@endphp

@indexPage($args)



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
<ul class="navbar-nav d-none d-md-flex ml-lg-auto">
    <li class="nav-item dropdown dropdown-notifications">
        <a class="nav-link pr-0" href="#notifications-panel" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i data-count="0" class="ni ni-bell-55 text-red animated shake"></i>
            <span class="mb-0 text-sm font-weight-bold"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            {{--notification goes here--}}
        </div>
    </li>
</ul>
<!-- end table -->
@endindexPage
@endsection