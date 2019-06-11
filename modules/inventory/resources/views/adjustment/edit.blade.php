@extends('admin::layout-nassau')

@push('styles')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endpush

@section('content')

{{ Form::model($adjustment, ['route' => ['adjustment.update', $adjustment->id], 'method' => 'PUT']) }}
{{ Form::hidden('users_id', null) }}

<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="form-group{{ $errors->has('product_variants_id') ? ' has-error' : '' }}">
            {{ Form::label('product_variants_id', 'Product Variant : ' . $productVariant->product->name . ' - ' . $productVariant->size_code . ' - ' . $productVariant->sku, ["class" => "control-label"]) }}

        </div>

        <div class="form-group{{ $errors->has('method') ? ' has-error' : '' }}">
            {{ Form::label('method', 'Method', ["class" => "control-label"]) }}

            <select name="method" class="form-control" required autofocus readonly disabled>
                <option></option>
                @foreach ($method as $key => $row)
                <option value="{{ $key }}" @if ($key==$adjustment->method) selected @endif >{{ $row }}</option>
                @endforeach
            </select>

            @if ($errors->has('method'))
            <span class="help-block">
                <strong>{{ $errors->first('method') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('qty') ? ' has-error' : '' }}">
            {{ Form::label('qty', 'Stock Adjustment', ["class" => "control-label"]) }}
            {{ Form::number('qty', null, ['style' => 'text-transform:capitalize','class' => 'form-control', 'onkeypress' => "return isNumberKey(event)", "readomly", "disabled"] ) }}

            @if($errors->has('qty'))
            <span class="help-block">
                <strong>{{ $errors->first('qty') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group">
            {{ link_to(url()->previous(), $title = 'Cancel', $attributes = ['class'=>'btn btn-default'], $secure = null) }}
        </div>
    </div>
</div>

{{ Form::close() }}

@endsection

@push('scripts')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">

    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode != 46 && charCode > 31
            && (charCode < 48 || charCode > 57))
            return false;

        return true;
    }

    $(document).ready(function () {
        $(".date").datepicker({
            dateFormat: 'yy-mm-dd',
            autoclose: true
        });
    });
</script>

@endpush