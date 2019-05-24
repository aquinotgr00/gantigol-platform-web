@push('scripts')
<script>
    $(document).ready(function () {
        var datatables = $('#paidDatatable').DataTable({
            "ajax": "{{ route('transaction.paid',$preOrder->id) }}",
            "order": [[3, "desc"]],
            "columns": [
                { "data": "created_at" },
                { "data": "invoice" },
                { 
                    "data": "name",
                    "render": function(data, type, row){
                        return '<a href="{{ url('admin/show-transaction') }}/'+row.id+'?preorder={{ $preOrder->id }}">'+data+'</a>';
                    } 
                },
                {
                    "data": "orders",
                    "render": function (data, type, row) {
                        var variant_qty = "";
                        $.each(data, function (key, val) {
                            variant_qty += val.size.toUpperCase() + " : ";
                            variant_qty += val.qty + "<br/>";
                        });
                        return variant_qty;
                    }
                }
            ],
            "fnRowCallback": function (nRow, aData, iDisplayIndex) {
                var index = iDisplayIndex + 1;
                $('td:eq(0)', nRow).html(index);
                return nRow;
            }

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
                    window.location.href = "{{ route('pending.transaction',$preOrder->id) }}";
                }
            });

        });
    });
</script>
@endpush
<div id="paid-pre" class="tab-pane">
    <div class="row mb-3">
        <div class="col col-md-4 mt-4">
            <div>
                <small>Summary Order :</small>
                <span class="Summary-ord">M : 10 L : 10 XL : 10</span>
            </div>
            <div>
                <small>Total Order : </small>
                <span class="Summary-ord">30</span>
            </div>
        </div>
        <div class="col-md-8">
            <div class=" form-group float-right mr-2">
                <div>
                    <label>Export Data</label>
                </div>
                <div class="btn-group" role="group" aria-label="#">
                    <button type="button" class="btn btn-line">PDF</button>
                    <button type="button" class="btn btn-line">Excel</button>
                    <button type="button" class="btn btn-line">Print</button>
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <!-- start table -->
        <table class="table table-bordered" id="paidDatatable" width="100%" cellspacing="0">
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
        <!-- end table -->
        <hr>
        <div class="float-right mt-3">
            @can('create-batch')
            <a class="btn btn-success ml-4" role="button" data-toggle="modal" data-target="#Makebatch">Make Batch</a>
            @endcan
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="Makebatch" tabindex="-1" role="dialog" aria-labelledby="batchModelLabel" aria-hidden="true">
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