@push('scripts')
<script>
    $(document).ready(function () {
        var datatables = $('#batchDataTable').DataTable({
            "ajax": "{{ route('batch-by-preorder',$preOrder->id) }}",
            "columns": [
                { "data": "start_production_date" },
                { 
                    "data": "batch_name",
                    "render": function(data, type,row){
                        if ($('input[name="view_batch"]')) {
                            var button = "";
                            button += "<a href='{{ url('admin/shipping-transaction') }}/" + row.id + "'>";
                            button += data;
                            button += "</a>";
                            return button;
                        }
                    } 
                },
                { "data": "batch_qty" },
                {
                    "data": "get_productions",
                    "render": function (data, type, row) {

                        var x = 0;
                        var qty_s = 0;
                        var qty_m = 0;
                        var qty_l = 0;
                        var qty_xl = 0;

                        $.each(data, function (key, val) {
                            $.each(val.get_transaction.orders, function (index, data) {
                                switch (data.size) {
                                    case 's':
                                        qty_s += parseInt(data.qty);
                                        break;
                                    case 'm':
                                        qty_m += parseInt(data.qty);
                                        break;
                                    case 'l':
                                        qty_l += parseInt(data.qty);
                                        break;
                                    case 'xl':
                                        qty_xl += parseInt(data.qty);
                                        break;
                                }
                            });
                        });
                        var variant = "";
                        variant += "S: " + qty_s + "<br/>";
                        variant += "M: " + qty_m + "<br/>";
                        variant += "L: " + qty_l + "<br/>";
                        variant += "XL: " + qty_xl + "<br/>";
                        return variant;
                    }
                },
                {
                    "data": "get_productions",
                    "render": function (data, type, row) {
                        var amount = 0;
                        $.each(data, function (key, val) {

                            if (val.status == 'ready_to_ship') {
                                amount++;
                            }
                        });
                        return amount;
                    }
                },
                {
                    "data": "id",
                    "render": function (data, type, row) {
                        var button = '<a href="{{ url("admin/shipping-sticker") }}/'+ data +'" class="btn btn-table circle-table print-table" data-toggle="tooltip" data-placement="top" title="" data-original-title="Print"></a>';
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
        <table class="table table-bordered" id="batchDataTable" width="100%" cellspacing="0">
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