@extends('admin::layout')

@section('content')

<form method="post" novalidate>
    @csrf
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" placeholder="Name" value="{{$user->name}}">
            @if ($errors->has('name'))
            <div class="invalid-feedback">{{ $errors->first('name') }}</div>
            @endif
        </div>

    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{$user->name}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
    </div>
    <div class="form-group row">
        <label for="confirm_password" class="col-sm-2 col-form-label">Confirm Password</label>
        <div class="col-sm-10">
            <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm Password">
        </div>
    </div>
    
    <div class="accordion mb-4">
        <div class="card">
            <!-- Card Header - Accordion -->
            <a href="#user-privilege" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="user-privilege">
                <h6 class="m-0 font-weight-bold text-primary">User</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="user-privilege">
                <div class="card-body">
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="privilege[]" value="manage-user" class="custom-control-input" id="chk-manage-user">
                            <label class="custom-control-label" for="chk-manage-user">Manage user</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="privilege[]" value="add-user" class="custom-control-input" id="chk-add-user">
                            <label class="custom-control-label" for="chk-add-user">Add user</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="privilege[]" value="update-user" class="custom-control-input" id="chk-update-user">
                            <label class="custom-control-label" for="chk-update-user">Edit user</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="privilege[]" value="enable-disable-user" class="custom-control-input" id="chk-enable-disable-user">
                            <label class="custom-control-label" for="chk-enable-disable-user">Enable/Disable user</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <!-- Card Header - Accordion -->
            <a href="#product-variant-privilege" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="product-variant-privilege">
                <h6 class="m-0 font-weight-bold text-primary">Product Variant</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="product-variant-privilege">
                <div class="card-body">
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="chk-manage-user">
                            <label class="custom-control-label" for="chk-manage-user">Manage product variant</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="chk-add-user">
                            <label class="custom-control-label" for="chk-add-user">Add product variant</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="chk-update-user">
                            <label class="custom-control-label" for="chk-update-user">Edit product variant</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="chk-enable-disable-user">
                            <label class="custom-control-label" for="chk-enable-disable-user">Delete product variant</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">{{ isset($user)?'Update':'Add New User'}}</button>
        </div>
    </div>
</form>

@endsection