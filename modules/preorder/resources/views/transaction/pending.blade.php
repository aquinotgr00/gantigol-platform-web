@push('scripts')
<script>
    $(document).ready(function() {
        var datatables = $('#pendingDataTable').DataTable({
            "ajax": "{{ route('transaction.pending',$preOrder->id) }}",
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
                            variant_qty += val.qty + "<br/>";
                        });
                        return variant_qty;
                    }
                },
                {
                    "data": "payment_reminder",
                    "render": function(data, type, row) {
                        var text = "";
                        for (var x = 0; x < data; x++) {
                            text += '<img class="alert-pre" src="{{ asset("vendor/admin") }}/images/alert-' + x + '.svg" alt="indicator reminder"></a>';
                        }
                        return text;
                    }
                }
            ],
            dom: 'Bfrtip',
            buttons: ['excel', 'pdf', 'print']
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