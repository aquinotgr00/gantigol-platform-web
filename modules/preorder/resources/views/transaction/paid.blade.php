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
            "ajax": "{{ route('transaction.paid',$preOrder->id) }}",
            "order": [[3, "desc"]],
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
                }
            ],
            select: true,
            "fnRowCallback": function (nRow, aData, iDisplayIndex) {
                var index = iDisplayIndex + 1;
                $('td:eq(0)', nRow).html(index);
                return nRow;
            }

        });
        datatables
            .on('click', 'tr', function () {
                var selected = datatables.row(this).data();
                window.location.href = "{{ url('preorder/show-transaction') }}" + "/" + selected.id+"?preorder="+"{{ $preOrder->id }}";
            });
        
        $('#form-create-batch').submit(function (e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: $(this).serializeArray(),
                dataType: "json",
                cache: false,
                success: function (data) {
                    console.log(data);
                    $('#exampleModal').modal('hide');
                    window.location.href = "{{ route('batch.transaction',$preOrder->id) }}";
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
                        <a class="flex-sm-fill text-sm-center nav-link active"
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
                    <h4>Paid Transaction</h4>
                </div>
                <div class="col">
                    <div class="text-right">
                        <button type="button" data-target="#exampleModal" data-toggle="modal"
                            class="btn btn-outline-primary">
                            Create Batch
                        </button>
                    </div>
                </div>
            </div>
            <hr />
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Order Date</th>
                        <th>Invoice ID</th>
                        <th>Name</th>
                        <th>Variant Quantity</th>
                    </tr>
                </thead>
                <tbody>
            </table>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="batchModelLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="{{ route('production-batch.store') }}" id="form-create-batch" method="post">
                {{ csrf_field() }}
                <div class="modal-header">
                    <h5 class="modal-title" id="batchModelLabel">Create Batch</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="batch_name" />
                    </div>
                    <div class="form-group">
                        <label for="">Start Production</label>
                        <input type="date" class="form-control" name="start_date" />
                    </div>
                    <div class="form-group">
                        <label for="">Finish Production</label>
                        <input type="date" class="form-control" name="end_date" />
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" value="{{ $preOrder->id }}" name="pre_order_id">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection