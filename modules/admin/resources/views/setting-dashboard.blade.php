@extends('admin::layout-nassau')

@section('content')

<div class="col-md-8 pl-0">
    <div class="pt-3 pb-3">
        <h2 class="mb-4">Dasboard Setting</h2>
        <div class="row">
            <div class="col">
                <label for="exampleFormControlSelect1">Dashboard Logo</label>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <form class="dropzone dropzone-secondary needsclick dz-clickable" id="demo-upload"
                                action="/upload">
                                <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-7">
                        <small>the height of the logo will be constrained to a maximum of 30 px</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <label for="exampleFormControlSelect1">Favicon</label>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <form class="dropzone dropzone-secondary needsclick dz-clickable" id="demo-upload"
                                action="/upload">
                                <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-7">
                        <small>The logo will be constrained to a maximum of 512x512px</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="pt-3 pb-3">
        <h2 class="mb-4">Account Setting</h2>
        <div>
            <div class="form-group">
                <label for="exampleInputPassword1">Old Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">New Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Confirm New Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
            </div>
        </div>
    </div>

    <hr>


    <div class="float-right">
        <button type="submit" class="btn btn-success" formaction="#">Submit</button>
    </div>

</div>

@endsection