@push('scripts')
<script>
    $(document).ready(function () {
        var datatables = $('#pendingDataTable').DataTable({
            "ajax": "{{ route('transaction.pending',$preOrder->id) }}",
            "order": [
                [0, "desc"]
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
                buttons: [
                    { extend: 'pdf', className: 'btn btn-line' },
                    { extend: 'excel', className: 'btn btn-line' },
                    { extend: 'print', className: 'btn btn-line' },
                ]
            }
        });

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