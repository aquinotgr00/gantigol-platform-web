@extends('admin::layout-nassau')

@section('content')
@indexPage(['title'=>'Product Size Chart', 'addNewAction'=>route('product-size-chart.create')])
<!-- start table -->
<table class="table" id="dataTable">
    <thead>
        <tr>
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
                success: function (result) {
                    if (result.data == 1) {
                        window.location.href = "{{ route('product-size-chart.index')  }}";
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
                url: '{{ route("datatables.size-chart") }}',
                method: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}"
                }
            },
            columns: [
                { data: 'image' },
                { data: 'name' },
                { data: 'action' },
            ],
            drawCallback: function(settings) {
                $('[data-toggle="tooltip"]').tooltip()
            }
        });

        $('#dataTable_filter').css('display','none');

        $('.search-box').on('keyup', function () {    
            datatables.search(this.value).draw();
        });

    });

</script>
@endpush
