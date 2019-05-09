@extends('preorder::layout')

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

        $('#heading-start-production-date').text(selected.start_production_date);
        $('#heading-end-production-date').text(selected.end_production_date);
        $('#heading-status').text(selected.status.toUpperCase());

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
                { "data": "get_transaction.courier_name" },
                { "data": "tracking_number" },
                {
                    "data": "status",
                    "render": function (data, type, row) {
                        return data.replace(/_/g, " ").toUpperCase();
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
                        alert('Success ! add shipping number');
                        window.location.href = "{{ route('shipping.transaction',$preOrder->id) }}";
                    } else {
                        alert('Error ! faield to add shipping number :(');
                    }
                }
            });

        });
    });
</script>
@endpush

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col">
                <div class="float-left">
                    <a class="btn btn-default btn-sm" href="{{ route('batch.transaction',$preOrder->id) }}">Back</a>
                    &nbsp;
                    <strong>
                        {{ (isset($preOrder->product->name))? $preOrder->product->name : '' }}
                    </strong>
                </div>
            </div>
            <div class="col">
                <div class="text-right">
                    <nav class="nav nav-pills flex-column flex-sm-row">
                        <a class="flex-sm-fill text-sm-center nav-link"
                            href="{{ route('pending.transaction',$preOrder->id) }}">Pending</a>
                        <a class="flex-sm-fill text-sm-center nav-link"
                            href="{{ route('paid.transaction',$preOrder->id) }}">Paid</a>
                        <a class="flex-sm-fill text-sm-center nav-link active"
                            href="{{ route('batch.transaction',$preOrder->id) }}">Batch</a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <h4 class="modal-title"></h4>
            </div>
            <div class="col-md-4 text-right">
                <a href="{{ route('batch.transaction',$preOrder->id) }}" class="btn btn-default">
                    Back
                </a>
                <a href="{{ route('shipping-edit.transaction',$production_batch->id) }}"
                    class="btn btn-outline-primary">
                    <i class="fa fa-pencil"></i>&nbsp;
                    Edit
                </a>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>Start Production</label>
                    <h4 id="heading-start-production-date"></h4>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>End Production</label>
                    <h4 id="heading-end-production-date"></h4>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Status</label>
                    <h4 id="heading-status"></h4>
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
    </div>
</div>
<input type="hidden" id="p-production-json" value="{{ (isset($production_json))? $production_json : '[]' }}" readonly />
@endsection