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
        datatables.buttons().container().appendTo('#buttonExportBatch');
    });
</script>
@endpush

<div id="batch-pre" class="tab-pane">
    <div class="row mb-3">
        <div class="col col-md-8 mt-4">
            <div>
                <small>Summary Order :</small>
                <span class="Summary-ord">
                    @foreach($summary_order_batch as $key => $value)
                    {{ $key }} : {{ array_sum($value) }} &nbsp;
                    @endforeach
                </span>
            </div>
            <div>
                <small>Total Order : </small>
                <span class="Summary-ord">{{ $total_order_batch }}</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class=" form-group float-right mr-2">
                <div>
                    <label>Export Data</label>
                </div>
                <div class="btn-group" id="buttonExportBatch" role="group"></div>
            </div>
        </div>
    </div>
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