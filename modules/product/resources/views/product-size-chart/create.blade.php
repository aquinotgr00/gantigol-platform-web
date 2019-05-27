@extends('admin::layout-nassau')

@push('scripts')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
@endpush

@section('content')
<!-- start form -->
<div class="row pl-3">
    <div class="col-md-8 offset-md-2">
        <form id="form-add-product" action="{{ route('product-size-chart.store') }}" method="post" enctype='multipart/form-data'>
            @csrf
            <div class="form-group">
                <label for="">Variant / Size name</label>
                <input type="text" name="name" class="form-control" />
            </div>
            <div class="form-group">
                <label for="">Size Codes</label>
                <input type="text" name="codes" class="form-control" />
            </div>
            <strong>Table Size Chart</strong>
            <hr>
            <div class="form-row inline-form">
                <div class="col-md-5 mr-3">
                    <label for="rows">Number of Rows</label>
                    <input type="text" class="form-control" id="rows">
                </div>
                <div class="col-md-5 mr-3">
                    <label for="cols">Number of Cols</label>
                    <input type="text" class="form-control" id="cols">
                </div>
                <div class="col-md-1 pt-1">
                    <label for="exampleAddNewProperties"></label>
                    <button type="button" class="btn sub-circle my-2 my-sm-0 generate-table">
                        <i class="fa fa-cog"></i>
                    </button>
                </div>
            </div>
            <div id="tableDiv"></div>
            <div class="form-group">
                <label for="">Size Chart Image</label>
                <input type="file" name="image" class="form-control" />
            </div>
            <div class="text-right">
                <button class="btn btn-success">
                    <i class="fa fa-save"></i>&nbsp;
                    Save
                </button>
            </div>
        </form>
    </div>

</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        $("button.generate-table").click(function () {
            var number_of_rows = $('#rows').val();
            var number_of_cols = $('#cols').val();
            var table_body = '<table class="table">';
            for (var i = 0; i < number_of_rows; i++) {
                table_body += '<tr>';
                for (var j = 0; j < number_of_cols; j++) {
                    table_body += '<td>';
                    table_body += '<input type="text" class="form-control" name="table['+i+'][]"/>';
                    table_body += '</td>';
                }
                table_body += '</tr>';
            }
            table_body += '</table>';
            $('#tableDiv').html(table_body);
        });
    });
</script>
@endpush