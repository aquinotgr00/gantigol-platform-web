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
        <input type="number" class="form-control" name="repeat"
            value="{{ (isset($setting_reminder->repeat))? $setting_reminder->repeat : '' }}" />
    </div>
    <div class="form-group mb-2">
        <label>Interval (Hours)</label>
        <input type="number" class="form-control" name="interval"
            value="{{ (isset($setting_reminder->interval))? $setting_reminder->interval : '' }}" />
    </div>
    <div class="form-group mb-2">
        <label>Daily At ( hh:mm )</label>
        <input type="text" class="form-control" name="daily_at"
            value="{{ (isset($setting_reminder->daily_at))? $setting_reminder->daily_at : '' }}" />
    </div>
    <div class="text-right">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-save"></i>&nbsp;
            Save
        </button>
    </div>
</form>