@push('scripts')
<script>
    $(document).ready(function() {
        var datatables = $('#batchDataTable').DataTable({
            "ajax": "{{ route('batch-by-preorder',$preOrder->id) }}",
            "columns": [{
                    "data": "start_production_date"
                },
                {
                    "data": "batch_name"
                },
                {
                    "data": "batch_qty"
                },
                {
                    "data": "variant_qty"
                },
                {
                    "data": "ready_to_ship"
                },
                {
                    "data": "shipping_sticker"
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
    });
</script>
@endpush

<div id="batch-pre" class="tab-pane">
    @can('view-batch')
    <input type="hidden" name="view_batch" value="1" />
    @endcan
    <div class="table-responsive">
        <table class="table" id="batchDataTable" width="100%" cellspacing="0">
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