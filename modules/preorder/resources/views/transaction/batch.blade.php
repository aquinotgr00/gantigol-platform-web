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
        var datatables = $('#dataTable').DataTable({
            "ajax": "{{ route('batch-by-preorder',$preOrder->id) }}",
            "columns": [
                { "data": "start_production_date" },
                { "data": "batch_name" },
                { "data": "batch_qty" },
                {
                    "data": "get_productions",
                    "render": function (data, type, row) {
                        
                        var x = 0;
                        var qty_s = 0;
                        var qty_m = 0;
                        var qty_l = 0;
                        var qty_xl = 0;

                        $.each(data, function (key, val) {
                            $.each(val.get_transaction.orders, function (index, data) {
                                switch (data.size) {
                                    case 's':
                                        qty_s += parseInt(data.qty);
                                        break;
                                    case 'm':
                                        qty_m += parseInt(data.qty);
                                        break;
                                    case 'l':
                                        qty_l += parseInt(data.qty);
                                        break;
                                    case 'xl':
                                        qty_xl += parseInt(data.qty);
                                        break;
                                }
                            });
                        });
                        var variant = "";
                        variant += "S: "+qty_s+"<br/>";
                        variant += "M: "+qty_m+"<br/>";
                        variant += "L: "+qty_l+"<br/>";
                        variant += "XL: "+qty_xl+"<br/>";
                        return variant;
                    }
                },
                {
                    "data": "get_productions",
                    "render": function (data, type, row) {
                        var amount = 0;
                        $.each(data, function (key, val) {
                            
                            if(val.status == 'ready_to_ship'){
                                amount++;
                            }
                        });
                        return amount;
                    }
                },
                {
                    "data": "id",
                    "render": function (data, type, row) {
                        var button = "<a href='{{ url('admin/shipping-sticker') }}/"+data+"' class='btn btn-outline-primary'>";
                        button += "<i class='fa fa-print'></i>&nbsp;";
                        button += "Print";
                        button += "</a>&nbsp;&nbsp;";
                        @can('view-batch')
                        button += "<a href='{{ url('admin/shipping-transaction') }}/"+data+"' class='btn btn-primary'>";
                        button += "<i class='fa fa-info'></i>&nbsp;";
                        button += "Details";
                        button += "</a>";
                        @endcan
                        return button;
                    }
                }
            ]

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
                    <a class="btn btn-default btn-sm" href="{{ route('list-preorder.show',$preOrder->id) }}">Back</a>
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
            <div class="col">
                <h4>Batch Transaction</h4>
            </div>

        </div>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Production Date</th>
                        <th>Batch Name</th>
                        <th>Quantity</th>
                        <th>Summary Batch</th>
                        <th>Ready To Ship</th>
                        <th>Print Shipping Sticker</th>
                    </tr>
                </thead>
                <tbody>
            </table>
        </div>
    </div>
</div>
@endsection