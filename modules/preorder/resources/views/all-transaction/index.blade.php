@extends('admin::layout-nassau')

@push('styles')

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet" />
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/admin/css/style.datatables.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/admin/css/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@section('content')
<!-- start tools -->
<div class="row mb-3">
    <!--<div class="col">
        <div class="form-group">
            <label for="exampleInputCategoryRelatedTag">Production date</label>
            <input type="text" class="form-control" id="datetimepicker1">
        </div>
    </div>-->
    <div class="col-md-2">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Status</label>
            <select name="status" class="form-control" id="exampleFormControlSelect1">
                <option value="">All Status</option>
                <option value="pending">Pending</option>
                <option value="paid">Paid</option>
                <option value="shipped">Shipped</option>
                <option value="rejected">Rejected</option>
                <option value="returned">Returned</option>
                <option value="completed">Completed</option>
            </select>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="searchInvoice">Invoice ID / Name</label>
            <input type="text" name="invoice" class="form-control" id="searchInvoice">
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
            <button class="btn circle-table btn-reset" data-toggle="tooltip" data-placement="top" title=""
                data-original-title="Reset">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
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
        $('[data-toggle="tooltip"]').tooltip()
        $('#datetimepicker1').datepicker();

        var dataTable = $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: {
                url: '{{ route("ajax.all-transaction") }}',
                method: 'POST',
                data: function(d) {
                    d._token = "{{ csrf_token() }}",
                        d.status = $('select[name="status"]').val(),
                        d.invoice = $('input[name="invoice"]').val()
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
                    data: 'invoice'
                },
                {
                    data: 'name'
                },
                {
                    data: 'courier_name',
                    render: function(data, type, row) {
                        return data + ' ' + row.courier_type;
                    }
                },
                {
                    data: 'status'
                }
            ],
            dom: 'Bfrtip',
            buttons: ['excel', 'pdf', 'print']
        });

        $('select[name="status"]').on("change", function(e) {
            dataTable.draw();
        });

        $('input[name="invoice"]').on("keyup keydown", function(e) {
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