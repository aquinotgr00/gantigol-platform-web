@push('scripts')
<script>
    $(document).ready(function() {
        var datatables = $('#batchDataTable').DataTable({
            "ajax": "{{ route('batch-by-preorder',$preOrder->id) }}",
            "columns": [{
                    "data": "start_production_date"
                },
                {
                    "data": "batch_name",
                    "render": function(data, type, row) {
                        if ($('input[name="view_batch"]')) {
                            var button = "";
                            button += "<a href='{{ url('admin/shipping-transaction') }}/" + row.id + "'>";
                            button += data;
                            button += "</a>";
                            return button;
                        }
                    }
                },
                {
                    "data": "batch_qty"
                },
                {
                    "data": "get_productions",
                    "render": function(data, type, row) {

                        var variant = "";
                        var variants = [];
                        var obj = [];
                        $.each(data, function(key, val) {
                            var amount = 0;
                            $.each(val.get_transaction.orders, function(index, data) {

                                switch (data.product_variant.variant) {
                                    case data.product_variant.variant:
                                        amount += parseInt(data.qty);
                                        break;
                                }
                                variants[data.product_variant.variant] = amount;
                            });
                        });
                        return variants;
                    }
                },
                {
                    "data": "get_productions",
                    "render": function(data, type, row) {
                        var amount = 0;
                        $.each(data, function(key, val) {

                            if (val.status == 'ready_to_ship') {
                                amount++;
                            }
                        });
                        return amount;
                    }
                },
                {
                    "data": "id",
                    "render": function(data, type, row) {
                        var button = '<a href="{{ url("admin/shipping-sticker") }}/' + data + '" class="btn btn-table circle-table print-table" data-toggle="tooltip" data-placement="top" title="" data-original-title="Print"></a>';
                        return button;
                    }
                }
            ]

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