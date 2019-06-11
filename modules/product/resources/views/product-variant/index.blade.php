@extends('admin::layout-nassau')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/admin/css/style.datatables.css') }}" rel="stylesheet">
@endpush

@push('scripts')
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
                <th scope="col">Variant Attribute</th>
                <th scope="col">Attribute Value</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
    </table>
</div>
<!-- end table -->
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
            ]
        });

        $('#dataTable_filter').css('display','none');

        $('.search-box').on('keyup', function () { 
            datatables.search(this.value).draw();
        });
    });
</script>
@endpush