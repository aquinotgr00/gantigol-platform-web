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
<div class="row mb-3">
    <div class="col">
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
        </form>
    </tool>
</div>
</div>
</div>
<!-- end tools -->
<!-- start table -->
<div class="table-responsive">
    <table class="table" id="dataTable">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">City</th>
                <th scope="col">Gender</th>
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

        }
    }

    $(function () {
        function titleCase(str) {
            str = str.toLowerCase().split(' ');
            let final = [];
            for (let word of str) {
                final.push(word.charAt(0).toUpperCase() + word.slice(1));
            }
            return final.join(' ')

        }
        var datatables = $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route("ajax.all-membership") }}',
                method: 'GET',
                data: {
                    "_token": "{{ csrf_token() }}"
                }
            },
            columns: [
                {
                    data: 'name',
                    render: function (data, type, row) {
                        return '<a href="{{ route("members.show",["member"=>1]) }}">' + titleCase(data) + '</a>';
                    }
                },
                { data: 'email' },
                { data: 'phone' },
                { data: 'city' },
                { data: 'gender' },
            ]
        });

        $('#dataTable_filter').css('display','none');

        $('.search-box').on('keyup', function () {
            datatables.search(this.value).draw();
        });
    });
</script>
@endpush
