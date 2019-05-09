@extends('preorder::layout')

@push('styles')
<style>
    label {
        margin-bottom: 0;
        margin-left: 1px;
    }
</style>
@endpush

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col">
                <div class="text-left">
                    <a href="{{ route('list-preorder.index') }}" class="btn btn-sm btn-default">Back</a>
                    &nbsp;<strong>Setting Reminder</strong>
                </div>
            </div>
            <div class="col">
                <div class="float-right">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('setting-reminder.index') }}">Reminder</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('setting-shipping.index') }}">Shipping</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('setting-reminder.store') }}" method="post">
                    @csrf
                    <div class="form-group mb-2">
                        <label>Repeat</label>
                        <input type="number"
                        class="form-control" 
                        name="repeat"
                        value="{{ (isset($setting_reminder->repeat))? $setting_reminder->repeat : '' }}"
                        />
                    </div>
                    <div class="form-group mb-2">
                        <label>Interval (Hours)</label>
                        <input type="number"
                        class="form-control" 
                        name="interval"
                        value="{{ (isset($setting_reminder->interval))? $setting_reminder->interval : '' }}"
                        />
                    </div>
                    <div class="form-group mb-2">
                        <label>Daily At ( hh:mm )</label>
                        <input type="text" 
                        class="form-control" 
                        name="daily_at"
                        value="{{ (isset($setting_reminder->daily_at))? $setting_reminder->daily_at : '' }}"
                        />
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-save"></i>&nbsp;
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection