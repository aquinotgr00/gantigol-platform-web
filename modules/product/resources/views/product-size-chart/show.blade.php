@extends('admin::layout-nassau')

@push('scripts')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
@endpush

@section('content')
<!-- start form -->
<div class="row pl-3">
    <div class="col-md-8 offset-md-2">
        <div class="form-group">
            <label for="">Chart Name</label>
            <p>{{ $productSize->name }}</p>
        </div>
        <div class="form-group">
            <label for="">Size Codes</label>
            <p>{{ join(', ',$productSize->codes) }}</p>
        </div>
        <strong>Table Size Chart</strong>
        <hr>
        <div id="tableDiv"></div>
        <hr>
        @php
        $image_url = str_replace('public','storage',$productSize->image);
        @endphp
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="text-center">
                    <img src="{{ url($image_url)  }}" alt="{{ $productSize->name }}" style="width:100%;" />
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="tableSize" value="{{ $productSize->charts }}" />
</div>
<!-- end form -->
@endsection

@push('scripts')
<script>

    $(document).ready(function () {

        var jData = $('input[name="tableSize"]').val();
        var jObj = JSON.parse(jData);
        var table = '<table class="table table-bordered">';
        var number = 0;
        table += '<tr>';
        $.each(jObj[0], function (index, data) {
            table += '<th><b>' + index + '</b></th>';
        });
        table += '</tr>';
        $.each(jObj, function (key, val) {

            table += '<tr>';
            $.each(val, function (index, data) {

                table += '<td>' + data + '</td>';
            });
            table += '</tr>';

        });
        table += '</table>';
        $('#tableDiv').html(table);
    });
</script>
@endpush