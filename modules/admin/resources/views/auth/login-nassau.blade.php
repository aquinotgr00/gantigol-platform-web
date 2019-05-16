@extends('admin::layout-nassau-login')

@section('content')

<img src="{{ asset('vendor/admin/images/logo-nassau.svg') }}" class="rounded mx-auto d-block logo" alt="logo-nassau">

<form method="post" action="{{ route('admin.login') }}">
    @csrf
    <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="email"
            class="form-control-user form-control{{ ($errors->has('email') || $errors->has('active')) ? ' is-invalid' : '' }}"
            id="inputEmail" aria-describedby="emailHelp" placeholder="E-Mail Address" name="email"
            value="{{ old('email') }}" autofocus>
    </div>
    <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control-user form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
            id="inputPassword" placeholder="Password" name="password">
        @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group">
        <div class="custom-control custom-checkbox small">
            <input type="checkbox" class="custom-control-input" id="remember" name="remember"
                {{ old('remember') ? 'checked' : '' }}>
            <label class="custom-control-label" for="remember">Remember Me</label>
        </div>
    </div>
    <div class="float-right">
        <button type="submit" class="btn btn-success">
            {{ __('Login') }}
        </button>
    </div>
</form>


@endsection
