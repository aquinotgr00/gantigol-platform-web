@push('scripts')
<script>
    $(document).ready(function () {

        $('#select-all').on('click', function () {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });

    });
</script>
@endpush

<h3>{{ (isset($name))? $name : 'Untitled' }}</h3>
<div class="row">
    <div class="col">
        <div class="row">
            <div class="col">
                <strong>Courier Status</strong>
            </div>
            <div class="col text-right">
                <a href="#" class="text-danger">Disable</a>
            </div>
        </div>
        <div class="alert alert-success">
            <i class="fa fa-check"></i>&nbsp;
            Enable
        </div>
    </div>
    <div class="col">
        <h3>Shipping Sticker </h3>
        <strong>Size</strong>
        <form action="{{ route('shipping.store-size') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Width (%)</label>
                <input type="number" name="width" class="form-control"
                    value="{{ (isset($setting->width))? $setting->width : '0' }}" />
            </div>
            <div class="form-group">
                <label for="">Height (px)</label>
                <input type="number" name="height" class="form-control"
                    value="{{ (isset($setting->height))? $setting->height : '0' }}" />
            </div>
            <div class="text-right">
                <a href="{{ route('setting-shipping.preview') }}" target="_blank" class="btn btn-link">Preview</a>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>