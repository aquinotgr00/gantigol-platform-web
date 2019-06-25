@extends('admin::layout-nassau')

@section('content')

@indexPage(['title'=>'Product Categories','addNewAction'=>route('product-categories.create')])

@table
<div class="row mb-3">
    <div class="col">
        @slot('headerColumns')
    </div>
</div>
<tr>
    <th scope="col">Image</th>
    <th scope="col">Parent Categories » Category</th>
    <th scope="col">Action</th>
</tr>
@endslot
@foreach ($categories as $category)
@include('product::includes.productcategory-table-row', ['category'=>$category, 'parent'=>'', 'parentSizeCodes'=>''])
@endforeach
@endtable

@endindexPage

@endsection

@push('scripts')
<script>

    function deleteItem(id) {

        if (confirm('Are u sure?')) {
            $.ajax({
                url: '{{ url("admin/product-categories") }}/' + id,
                type: 'DELETE',
                data: {
                    "_token": "{{ csrf_token() }}"
                },
                dataType: 'json',
                success: function (result) {
                    if (result.data == 1) {
                        window.location.href = "{{ route('product-categories.index')  }}";
                    }
                }
            });
        }
    }

    $(document).ready(function () {

        var datatables = $('.table').DataTable();

        $('.dataTables_filter').css('display', 'none');

        $('.search-box').on('keyup', function () {
            datatables.search(this.value).draw();
        });
    });
</script>
@endpush