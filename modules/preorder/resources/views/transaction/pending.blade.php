@push('scripts')
<script>
    $(document).ready(function () {
        var datatables = $('#pendingDataTable').DataTable({
            "ajax": "{{ route('transaction.pending',$preOrder->id) }}",
            "order": [[4, "desc"]],
            "columns": [
                { "data": "created_at" },
                { 
                    "data": "invoice",
                    "render": function(data, type, row){
                        return '<a href="{{ url('admin/show-transaction') }}/'+row.id+'?preorder={{ $preOrder->id }}">'+data+'</a>';
                    }
                },
                { "data": "name" },
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
                },
                {
                    "data": "payment_reminder",
                    "render": function (data, type, row) {
                        var text = "";
                        for (var x = 0; x < 3; x++) {
                            text += '<img class="alert-pre" src="{{ asset("vendor/admin") }}/images/alert-' + x + '.svg" alt="indicator reminder"></a>';
                        }
                        return text;
                    }
                }
            ]
        });
    });
</script>
@endpush
<div id="pending-pre" class="tab-pane active">
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
                        @can('send-reminder')
                        <!--<a href="{{ route('transaction.send-reminder',$preOrder->id) }}" 
                            class="btn btn-primary">Send reminder
                        </a>-->
                        @endcan
                    </div>
                </div>
            </div>
        </div>
        <!-- end tools -->

        <!-- start table -->
        <div class="table-responsive">
            <table class="table" id="pendingDataTable" width="100%" cellspacing="0">
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
        <!-- end table -->
    </div>