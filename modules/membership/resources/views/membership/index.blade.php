@extends('admin::layout-nassau')

@section('content')

@indexPage(['title'=>'Memberships'])
<table class="table" id="dataTable">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">City</th>
            <th scope="col">Gender</th>
            <th scope="col">Created on</th>
        </tr>
    </thead>
</table>
@endindexPage

@endsection

@push('scripts')
<script>

    $(function () {
        var datatables = $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route("ajax.all-membership") }}',
                method: 'GET'
            },
            columns: [
                {
                    data: 'name',
                    render: function (data, type, row) {
                        return '<a href="{{ route("members.show",["member"=>1]) }}">' + data + '</a>';
                    }
                },
                { data: 'email' },
                { data: 'phone' },
                { data: 'city' },
                { data: 'gender' },
                { data: 'created_at' }
            ]
        });

        $('#dataTable_filter').css('display','none');

        $('.search-box').on('keyup', function () {
            datatables.search(this.value).draw();
        });
    });
</script>
@endpush
