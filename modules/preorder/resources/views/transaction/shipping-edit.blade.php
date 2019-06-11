@extends('admin::layout-nassau')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="https://cdn.datatables.net/select/1.3.0/css/select.bootstrap4.min.css" rel="stylesheet">

@endpush

@push('scripts')
<script src="{{ asset('vendor/admin/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.select.min.js') }}"></script>
<script>
    $(document).ready(function () {
        var production_json = $('#p-production-json').val();

        var selected = JSON.parse(production_json);

        $('input[name="start_production_date"]').val(selected.start_production_date);
        $('input[name="end_production_date"]').val(selected.end_production_date);
        $('select[name="status"]').val(selected.status);
        $('input[name="batch_id"]').val(selected.id);
        $('.modal-title').text('Batch ' + selected.batch_name.toUpperCase());
        $('#myModal').modal('show');
        $('#datatable-shipping').DataTable({
            "data": selected.get_productions,
            "columns": [
                { "data": "get_transaction.created_at" },
                { "data": "get_transaction.invoice" },
                { "data": "get_transaction.name" },
                {
                    "data": "get_transaction.orders",
                    "render": function (data, type, row) {
                        var qty_s = 0;
                        var qty_m = 0;
                        var qty_l = 0;
                        var qty_xl = 0;
                        var qty_n = 0;
                        var output = "";
                        $.each(data, function (key, val) {
                            switch (val.size) {
                                case 's':
                                    qty_s += parseInt(val.qty);
                                    break;
                                case 'm':
                                    qty_m += parseInt(val.qty);
                                    break;
                                case 'l':
                                    qty_l += parseInt(val.qty);
                                    break;
                                case 'xl':
                                    qty_xl += parseInt(val.qty);
                                    break;
                                default:
                                    qty_n += val.qty;
                                    break;
                            }
                        });
                        output += "S : " + qty_s + "<br/>";
                        output += "M : " + qty_m + "<br/>";
                        output += "L : " + qty_l + "<br/>";
                        output += "XL : " + qty_xl + "<br/>";
                        return output;
                    }
                },
                {
                    "data": "get_transaction.courier_name",
                    "render": function (data, type, row) {
                       return data;
                    }
                },
                {
                    "data": "tracking_number",
                    "render": function (data, type, row) {
                        var tracking_number = (data == null) ? '-' : data;
                        var input = "<input type='text' name='tracking_number[]' value='" + tracking_number + "'   />";
                        input += "<input type='hidden' value='" + row.id + "' name='production_id[]' />";
                        return input;
                    }
                },
                {
                    "data": "status",
                    "render": function (data, type, row) {
                        var status = ['pending', 'proceed', 'ready_to_ship', 'shipped'];
                        var select = "<select name='status_production[]'>";
                        $.each(status, function (key, val) {
                            if (data == val) {
                                select += "<option value='" + val + "' selected>" + val + "</option>";
                            } else {
                                select += "<option value='" + val + "'>" + val + "</option>";
                            }
                        });
                        select += "</select>";
                        return select;
                    }
                }
            ]
        });

        $('#form-input-shipping-number').submit(function (e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: $(this).serializeArray(),
                dataType: "json",
                cache: false,
                success: function (data) {
                    if (typeof data.data.id !== "undefined") {
                        alert('Success ! update shipping status');
                        window.location.href = "{{ route('shipping.transaction',$production_batch->id) }}";
                    } else {
                        alert('Error ! faield to update shipping status :(');
                    }
                }
            });

        });
    });
</script>
@endpush

@section('content')
<form id="form-input-shipping-number" action="{{ route('production.save-shipping-number') }}" method="post">
    @csrf
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Start Production</label>
                <input type="date" name="start_production_date" class="form-control" />
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>End Production</label>
                <input type="date" name="end_production_date" class="form-control" />
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                    @if(isset($status))
                        @foreach($status as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" style="width:100%;" id="datatable-shipping">
            <thead>
                <tr>
                    <th>Order Date</th>
                    <th>Invoice ID</th>
                    <th>Name</th>
                    <th>Variant Quantity</th>
                    <th>Courier</th>
                    <th>Tracking Number</th>
                    <th>Status</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4 text-right">
            <input type="hidden" name="batch_id" />
            <a href="{{ route('shipping.transaction',$production_batch->id) }}" class="btn btn-outline-warning">
                Cancel
            </a>
            <button type="submit" class="btn btn-success">
                <i class="fa fa-save"></i>&nbsp;
                Save
            </button>
        </div>
    </div>
</form>
<input type="hidden" id="p-production-json" value="{{ (isset($production_json))? $production_json : '[]' }}" readonly />
@endsection