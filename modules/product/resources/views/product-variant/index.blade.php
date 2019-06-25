@extends('admin::layout-nassau')

@section('content')
@indexPage(['title'=>'Product Variant', 'addNewAction'=>route('product-variant.create')])
<!-- start table -->
<table class="table" id="dataTable">
    <thead>
        <tr>
            <th scope="col">Variant Attribute</th>
            <th scope="col">Attribute Value</th>
            <th scope="col">Action</th>
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
                url: '{{ url("admin/product-variant") }}/' + id,
                type: 'DELETE',
                data: {
                    "_token": "{{ csrf_token() }}"
                },
                dataType: 'json',
                success: function (result) {
                    if (result.data == 1) {
                        window.location.href = "{{ route('product-variant.index')  }}";
                    }
                }
            });
        }
    }

    $(function () {

        var datatables = $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route("datatables.variant") }}',
                method: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}"
                }
            },
            columns: [
                { data: 'attribute' },
                { data: 'value' },
                { data: 'action' },
            ],
            drawCallback: function(settings) {
                $('[data-toggle="tooltip"]').tooltip()
            }
        });

        $('#dataTable_filter').css('display', 'none');

        $('.search-box').on('keyup', function () {
            datatables.search(this.value).draw();
        });
    });
</script>
@endpush