@extends('admin::layout-nassau')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('vendor/admin/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.bootstrap4.min.js') }}"></script>
@endpush

@section('content')
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
            @can('add-user')
            <a class="btn sub-circle my-2 my-sm-0" href="{{ route('users.create') }}" role="button">
                <img class="add-svg" src="{{ asset('vendor/admin/images/add.svg') }}" alt="add-image">
            </a>
            @endcan
        </form>
    </tool>
</div>
<!-- start table -->
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Account Status</th>
                @can('edit-user')
                <th></th>
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
                    @smallRoundButton(['icon'=>'fa-pen','title'=>'Edit','route'=>route('users.edit',['user'=>$user])])
                </td>
                @endcan
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- end table -->

@endsection

@push('scripts')
<script>
    $('input.user-activation[type="checkbox"]').change(function () {
        let action = '{{ route("users.status", "@@") }}'.replace('@@', $(this).data('user'))
        $('<form method="post" action="' + action + '">@csrf @method("PUT")</form>').appendTo('body').submit()
    })
</script>
@endpush