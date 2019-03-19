@extends('admin::layout')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('vendor/admin/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.bootstrap4.min.js') }}"></script>
@endpush

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            @can('add-user')
            <a class="btn btn-outline-primary btn-sm" href="{{ route('users.create') }}">Add User</a>
            @endcan
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        
                        @can('update-status-user')
                        <th>Account Status</th>
                        @endcan
                        
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
                        
                        @can('update-status-user')
                        <td>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input user-activation" data-user="{{ $user->id }}" id="switch-{{ $user->id }}" {{ $user->active?'checked':'' }} {{ Auth::id()===$user->id?'disabled':'' }}>
                                <label class="custom-control-label" for="switch-{{ $user->id }}" >{{ $user->active?'Enabled':'Disabled' }}</label>
                            </div>
                        </td>
                        @endcan
                        
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
    </div>
</div>

@endsection

@push('scripts')
<script>
	$('.toast').toast('show')
    
    $('input.user-activation[type="checkbox"]').change(function() {
        let action = '{{ route("users.status", "@@") }}'.replace('@@',$(this).data('user'))
        $('<form method="post" action="'+action+'">@csrf @method("PUT")</form>').appendTo('body').submit()
	})
</script>
@endpush