@extends('admin::layout-nassau')

@section('content')

<form method="post" action="{{ route('users.update',$user) }}">
    @csrf
    
    @if($user->id)
    @method('PUT')
    <input type="hidden" name="id" value="{{$user->id}}" />
    @endif
    
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" value="{{ old('name') ?? $user->name}}" autofocus>
            @if ($errors->has('name'))
            <div class="invalid-feedback">{{ $errors->first('name') }}</div>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" value="{{ old('email') ?? $user->email}}">
            @if ($errors->has('email'))
            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password">
            @if ($errors->has('password'))
            <div class="invalid-feedback">{{ $errors->first('password') }}</div>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="password_confirmation" class="col-sm-2 col-form-label">Confirm Password</label>
        <div class="col-sm-10">
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
        </div>
    </div>
    
    <hr />
    
    <h5 class="text-gray-900">Admin Privilege</h5>
    @if ($errors->has('privilege'))
    <span class="text-danger">{{ $errors->first('privilege') }}</span>
    @endif
    
    
    <div class="form-group row">
        <label for="select-privilege" class="col-sm-2 col-form-label">Select a role</label>
        <div class="col-sm-10">
            <select name="role_id" class="custom-select mr-sm-2" id="select-role" @cannot('edit-user-privileges',$user) disabled @endcannot>
                <option value="" data-privileges="[]">
                    @if($user->id)
                        Custom
                    @else
                        Choose...
                    @endif
                </option>
                @foreach($roles as $role)
                @php
                    $rolePrivileges = $role->privileges->pluck('privilege_id')->toJson();
                    $selected = '';
                    
                    if($role->id === $user->role->id ) {
                        $selected = 'selected';
                    }
                @endphp
                <option value="{{$role->id}}" data-privileges="{{ $rolePrivileges }}" {{$selected}}>{{ $role->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <h6>Or customize</h6>
    @include('admin::user.partials.privileges' )

    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>

@endsection

@push('scripts')
<script>
	$('#select-role').change(function() {
        const privileges = $('#select-role option:checked').data('privileges')
        
        if(privileges) {
            $('input.chk-privilege').prop('checked',false)
            $.each(privileges, function(index, value) {
                $('input.chk-privilege[value='+value+']').prop('checked',true)
            })
        }
    })
    
    $('input.chk-privilege').change(function() {
        const checkedPrivileges = $('input.chk-privilege:checked')
        $('#select-role option[value=""]').text((checkedPrivileges.length>0)?'Custom':'Choose...')
        $('#select-role option').prop('selected',false)
        const selectedPrivileges = JSON.stringify(checkedPrivileges.map(function() {
            return parseInt(this.value)
        }).get())
        $('#select-role option[data-privileges="'+selectedPrivileges+'"]').prop('selected',true)
    })
</script>
@endpush