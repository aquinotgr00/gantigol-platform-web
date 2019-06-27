@extends('admin::layout-nassau')

@section('content')

@php

$user = Auth::user();

$args = ['title'=>'Product Size Chart'];

if (Gate::forUser($user)->allows('create-size-chart')) {
$args['addNewAction'] = route('product-size-chart.create');
}

@endphp

@indexPage($args)
<!-- start table -->
<table class="table" id="dataTable">
    <thead>
        <tr>
            <th>#</th>
            <th>Image</th>
            <th>Size Chart Name</th>
            <th>Action</th>
        </tr>
    </thead>
</table>
<!-- end table -->
@endindexPage
@endsection

@push('scripts')
<script>
    function deleteItem(id) {

        if (confirm('Are u sure?')) {
            $.ajax({
                url: '{{ url("admin/product-size-chart") }}/' + id,
                type: 'DELETE',
                data: {
                    "_token": "{{ csrf_token() }}"
                },
                dataType: 'json',
                success: function(result) {
                    if (result.data == 1) {
                        window.location.href = "{{ route('product-size-chart.index')  }}";
                    }
                }
            });
        }
    }

    $(function() {

        var datatables = $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route("datatables.size-chart") }}',
                method: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}"
                }
            },
            columns: [{
                    data: 'created_at'
                },
                {
                    data: 'image'
                },
                {
                    data: 'name'
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

        $('.search-box').on('keyup', function() {
            datatables.search(this.value).draw();
        });

    });
</script>
@endpush