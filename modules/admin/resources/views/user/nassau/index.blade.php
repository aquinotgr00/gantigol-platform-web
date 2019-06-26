@extends('admin::layout-nassau')

@section('content')
@indexPage(['title'=>'Administrators','addNewAction'=>route('users.create'),'addNewPrivilege'=>'add-user'])
<!-- start table -->
<div class="table-responsive">
    <table class="table" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Account Status</th>
                @can('edit-user')
                <th>Action</th>
                @endcan
            </tr>
        </thead>

        <tbody>
            @foreach($users as $user)
            <tr class="{{ $user->active?'':'bg-gray-100' }}">
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role->name }}</td>
                <td>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input user-activation" data-user="{{ $user->id }}"
                            id="switch-{{ $user->id }}" {{ $user->active?'checked':'' }} @cannot('update-status-user',
                            $user) disabled @endcannot>
                        <label class="custom-control-label"
                            for="switch-{{ $user->id }}">{{ $user->active?'Enabled':'Disabled' }}</label>
                    </div>
                </td>
                @can('edit-user')
                <td>
                    <a href="{{ route('users.edit',['user'=>$user]) }}"
                        class="btn btn-table circle-table edit-table"
                        data-toggle="tooltip"
                        data-placement="top" title="" data-original-title="Edit">
                    </a>
                </td>
                @endcan
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- end table -->
@endindexPage
@endsection

@push('scripts')
<script>
    $('input.user-activation[type="checkbox"]').change(function () {
        let action = '{{ route("users.status", "@@") }}'.replace('@@', $(this).data('user'))
        $('<form method="post" action="' + action + '">@csrf @method("PUT")</form>').appendTo('body').submit()
    })

    $(document).ready(function(){
        var datatables = $('#dataTable').DataTable();

        $('#dataTable_filter').css('display','none');

        $('#search').on('keyup', function () {

            datatables.search(this.value).draw();
        });
    });
</script>
@endpush
