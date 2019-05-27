@extends('admin::layout-nassau')

@push('styles')
<style>
    label {
        margin-bottom: 0;
        margin-left: 1px;
    }
</style>
@endpush

@section('content')
<div>
    <ul class="nav nav-tabs mt-4 mb-4">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#reminder-pre">Reminder</a>
        </li>
        <li class="vr"></li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#shipping-pre">Shipping</a>
        </li>
        <li class="vr"></li>
    </ul>
</div>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="tab-content">
    <div id="reminder-pre" class="tab-pane active">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @include('preorder::setting.reminder')
            </div>
        </div>
    </div>
    <div id="shipping-pre" class="tab-pane">
        @include('preorder::setting.shipping',$courier)
    </div>
</div>
@endsection