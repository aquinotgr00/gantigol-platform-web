@push('scripts')
<script>
    $(document).ready(function () {
        var datatables = $('#pendingDataTable').DataTable({
            "ajax": "{{ route('transaction.pending',$preOrder->id) }}",
            "order": [
                [1, "desc"]
            ],
            "columns": [{
                "data": "created_at"
            },
            {
                "data": "invoice"
            },
            {
                "data": "name"
            },
            {
                "data": "variant_qty"
            },
            {
                "data": "email_received"
            }
            ],
            dom: 'Bfrtip',
            buttons: ['excel', 'pdf', 'print'],
            buttons: {
                buttons: [{
                    extend: 'pdf',
                    className: 'btn btn-line'
                },
                {
                    extend: 'excel',
                    className: 'btn btn-line'
                },
                {
                    extend: 'print',
                    className: 'btn btn-line'
                },
                ]
            }
        });

        datatables.buttons().container().appendTo('#buttonExportPending');
        //$('.dt-buttons').css('display', 'none');

        $.each($('.btn-line'), function (key, value) {
            $(value).click(function () {
                var selector = $(value).data('trigger');
                $('.' + selector).click();
            });
        });
    });
</script>
@endpush
<div id="pending-pre" class="tab-pane active">
    <div class="row mb-3">
        <div class="col col-md-8 mt-4">
            <div>
                <small>Summary Order :</small>
                <span class="Summary-ord">
                    @foreach($summary_order as $key => $value)
                    {{ $key }} : {{ array_sum($value) }} &nbsp; 
                    @endforeach
                </span>
            </div>
            <div>
                <small>Total Order : </small>
                <span class="Summary-ord">{{ $total_order }}</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class=" form-group float-right mr-2">
                <div>
                    <label>Export Data</label>
                </div>
                <div class="btn-group" id="buttonExportPending" role="group"></div>
            </div>
        </div>
    </div>
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