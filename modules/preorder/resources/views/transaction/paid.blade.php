@push('scripts')
<script>
    $(document).ready(function() {
        var datatables = $('#paidDatatable').DataTable({
            "ajax": "{{ route('transaction.paid',$preOrder->id) }}",
            "order": [
                [0, "desc"]
            ],
            "columns": [{
                    "data": "created_at"
                },
                {
                    "data": "invoice",
                    "render": function(data, type, row) {
                        return '<a href="{{ url('admin/show-transaction') }}/' + row.id + '?preorder={{ $preOrder->id }}">' + data + '</a>';
                    }
                },
                {
                    "data": "name"
                },
                {
                    "data": "orders",
                    "render": function(data, type, row) {
                        var variant_qty = "";
                        $.each(data, function(key, val) {
                            variant_qty += val.product_variant.variant + " : ";
                            variant_qty += val.qty + "<br/>";
                        });
                        return variant_qty;
                    }
                }
            ],
            dom: 'Bfrtip',
            buttons: ['excel', 'pdf', 'print']

        });

        $('#form-create-batch').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: $(this).serializeArray(),
                dataType: "json",
                cache: false,
                success: function(data) {
                    console.log(data);
                    $('#exampleModal').modal('hide');
                    window.location.href = "{{ route('pending.transaction',$preOrder->id) }}";
                }
            });

        });

        $('.dt-buttons').css('display', 'none');

        $.each($('.btn-line'), function(key, value) {
            $(value).click(function(){
                var selector = $(value).data('trigger');
                $('.'+selector).click();
            });
        });
    });
</script>
@endpush
<div id="paid-pre" class="tab-pane">
    <div class="table-responsive">
        <!-- start table -->
        <table class="table" id="paidDatatable" width="100%" cellspacing="0">
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