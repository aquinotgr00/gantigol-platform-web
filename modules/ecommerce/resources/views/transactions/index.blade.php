@extends('admin::layout-nassau')

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.css" rel="stylesheet" />
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/admin/css/style.datatables.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/admin/css/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@section('content')
<!-- start tools -->
<div class="row mb-3">
    <div class="col-md-2">
        <div class="form-group">
            <label for="filter-text">Status</label>
            <select name="status" class="form-control" id="filter-text">
                <option value="">Choose one</option>
                @foreach(array_keys(config('ecommerce.order.status')) as $i => $order_filter)
                @if($i != 6)
                <option class="filter-order" data-filter={{$i}} data-text="{{$order_filter}}" value="{{ $order_filter }}">{{$order_filter}}</option>
                @endif
                @endforeach
            </select>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="searchInvoice">Invoice ID / Name</label>
            <input type="text" name="invoice_id" class="form-control" id="searchInvoice">
        </div>
    </div>
    <!--
    <div class="col-md-1">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Show</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option value="0">10</option>
                <option value="50">50</option>
                <option value="100">100</option>
                <option value="*">Show All</option>
            </select>
        </div>
    </div>
    <div class="col-md-1">
        <div class="mt-reset">
            <button class="btn circle-table btn-reset" data-toggle="tooltip" data-placement="top" title="" data-original-title="Reset" id="reset-all">
            </button>
        </div>
    </div>
-->
    <div class="col">
        <div class="form-group">
            <div>
                <label>Export Data</label>
            </div>
            <div class="btn-group" role="group" aria-label="#">
                <button type="button" data-trigger="buttons-pdf" class="btn btn-line">PDF</button>
                <button type="button" data-trigger="buttons-excel" class="btn btn-line">Excel</button>
                <button type="button" data-trigger="buttons-print" class="btn btn-line">Print</button>
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
                <th scope="col">Status</th>

            </tr>
        </thead>
    </table>
</div>
<!-- end table -->

@endsection

@push('scripts')
<script src="{{ asset('vendor/admin/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.js"></script>

<script src="{{ asset('vendor/admin/js/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/buttons.colVis.min.js') }}"></script>
<script>
    $(document).ready(function() {

        var dataTable = $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: {
                url: '{{ route("order-transaction.index") }}',
                method: 'GET',
                data: function(d) {
                    d._token = "{{ csrf_token() }}",
                        d.invoice = $('input[name="invoice_id"]').val(),
                        d.status = $('select[name="status"]').val()
                }
            },
            order: [
                [0, "desc"]
            ],
            columns: [{
                    data: 'id',
                    orderable: false
                },
                {
                    data: 'created_at'
                },
                {
                    data: 'invoice_id'
                },
                {
                    data: 'billing_name'
                },
                {
                    data: 'shipment_name'
                },
                {
                    data: 'order_status'
                }
            ],
            dom: 'Bfrtip',
            buttons: ['excel', 'pdf', 'print']
        });

        $('input[name="invoice_id"]').on("keyup keydown", function(e) {
            dataTable.draw();
        });

        $('select[name="status"]').change(function(e) {
            dataTable.draw();
        });


        $('#selectAll').click(function() {
            $('input[name="id[]"]').prop('checked', this.checked);
        });

        $('.dt-buttons').css('display', 'none');

        $.each($('.btn-line'), function(key, value) {
            $(value).click(function() {
                var selector = $(value).data('trigger');
                $('.' + selector).click();
            });
        });
    });
</script>
@endpush