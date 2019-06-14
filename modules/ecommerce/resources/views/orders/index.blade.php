@extends('admin::layout-nassau')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/admin/css/style.datatables.css') }}" rel="stylesheet">
@endpush

@section('content')
<!-- start tools -->
<div class="row mb-3">
    <div class="col">
        <div class="form-group col-md-6">
            <label for="searchInvoice">Invoice ID / Name</label>
            <input type="text" name="invoice_id" class="form-control" id="searchInvoice">
        </div>
    </div>
    <div class="col">
        <div class="form-group float-right">
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
<!-- end tools -->

<!-- start table -->
<div class="table-responsive">
    <table class="table table-hover" id="dataTable">
        <thead>
            <tr>
                <th scope="col">
                    <div class="form-check">
                        <input class="form-check-input check-table" type="checkbox" id="selectAll">
                    </div>
                </th>
                <th scope="col">Order Date</th>
                <th scope="col">Invoice ID</th>
                <th scope="col">Name</th>
                <th scope="col">Courier</th>
                <th scope="col">Tracking Number</th>

            </tr>
        </thead>
    </table>
</div>
<!-- end table -->

@endsection

@push('scripts')
<script src="{{ asset('vendor/admin/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script >
    $(document).ready(function(){

        var dataTable = $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: {
                url: '{{ route("paid-order.index") }}',
                method: 'GET',
                data : function(d){
                    d._token = "{{ csrf_token() }}",
                    d.invoice = $('input[name="invoice_id"]').val()
                }
            },
            order: [[0, "desc"]],
            columns: [
                { data: 'id', orderable: false },
                { data: 'created_at' },
                { data: 'invoice_id' },
                { data: 'billing_name' },
                { data: 'shipping_name' },
                { data: 'shipping_tracking_number' }
            ]
        });

        $('input[name="invoice_id"]').on("keyup keydown", function (e) {
            dataTable.draw();
        });

        $('#selectAll').click(function(){
            $('input[name="id[]"]').prop('checked', this.checked);
        });
        
    });
</script>
@endpush