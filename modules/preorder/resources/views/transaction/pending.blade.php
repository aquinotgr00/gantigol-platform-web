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
            "ajax": "{{ route('transaction.pending',$preOrder->id) }}",
            "order": [[4, "desc"]],
            "columns": [
                { "data": "created_at" },
                { "data": "invoice" },
                { "data": "name" },
                { 
                    "data": "orders",
                    "render": function(data,type,row){
                        var variant_qty ="";
                        $.each(data, function(key,val) {
                            variant_qty += val.size.toUpperCase()+" : ";
                            variant_qty += val.qty+"<br/>";
                        });
                        return variant_qty;
                    }
                },
                {
                    "data": "payment_reminder",
                    "render": function (data, type, row) {
                        var text = '<center>' + data + ' X</center>';
                        var color = [ "info","warning","danger" ];
                        text = "<div class='row'>";
                        for (var index = 0; index < data; index++) {
                            const indicator = color[index];
                            
                            text += "<div class='col-md-4'><div class='alert alert-"+indicator+"'></div> </div>";   
                        }
                        text += "</div>";
                        return text;
                    }
                }
            ],
            select: true

        });
        datatables
            .on('click', 'tr', function () {
                var selected = datatables.row(this).data();
                window.location.href = "{{ url('preorder/show-transaction') }}" + "/" + selected.id + "?preorder=" + "{{ $preOrder->id }}";
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
                        <a class="flex-sm-fill text-sm-center nav-link active"
                            href="{{ route('pending.transaction',$preOrder->id) }}">Pending</a>
                        <a class="flex-sm-fill text-sm-center nav-link"
                            href="{{ route('paid.transaction',$preOrder->id) }}">Paid</a>
                        <a class="flex-sm-fill text-sm-center nav-link"
                            href="{{ route('batch.transaction',$preOrder->id) }}">Batch</a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="row">
                <div class="col">
                    <h4>Pending Transaction</h4>
                </div>
                <div class="col">
                    <div class="text-right">
                        <a href="{{ route('transaction.send-reminder',$preOrder->id) }}" class="btn btn-sm btn-outline-primary">Send reminder</a>
                    </div>
                </div>
            </div>
            <hr>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Order Date</th>
                        <th>Invoice ID</th>
                        <th>Name</th>
                        <th>Variant Qty</th>
                        <th>Email Received</th>
                    </tr>
                </thead>
                <tbody>
            </table>
        </div>
    </div>
</div>
@endsection