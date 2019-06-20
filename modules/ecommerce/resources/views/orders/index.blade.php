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
    <div class="col-md-3">
        <div class="form-group">
            <label for="searchInvoice">Date</label>
            <input type="text" name="startdate" class="form-control" id="startDateFilter">
        </div>
    </div>
    <div class="col">
        <div class="form-group col-md-12">
            <label for="searchInvoice">Invoice ID / Name</label>
            <input type="text" name="invoice_id" class="form-control" id="searchInvoice">
        </div>
    </div>
    <div class="col-md-1">
        <div class="mt-reset">
            <button class="btn circle-table btn-reset" data-toggle="tooltip" data-placement="top" title="" data-original-title="Reset" id="reset-all">
            </button>
        </div>
    </div>
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
                <!-- <th scope="col">
                    <div class="form-check">
                        <input class="form-check-input check-table" type="checkbox" id="selectAll">
                    </div>
                </th> -->
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
        var delay = (function(){
              var timer = 0;
              return function(callback, ms, that){
                clearTimeout (timer);
                timer = setTimeout(callback.bind(that), ms);
              };
            })();
        $('#startDateFilter').daterangepicker({
            dateFormat: 'yyyy-mm-dd',
            startDate: moment(),
            endDate: moment(),
            locale: {
              format: 'Y-MM-DD'
            }
            }, function(start, end, label) {
                dataTable.draw()
            });
        var dataTable = $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
            ajax: {
                url: '{{ route("paid-order.index") }}',
                method: 'GET',
                data: function(d) {
                    d._token = "{{ csrf_token() }}",
                    d.invoice = $('input[name="invoice_id"]').val()
                    d.startdate = $('#startDateFilter').data('daterangepicker').startDate.format('YYYY-MM-DD')+" 00:00:00",
                    d.enddate = $('#startDateFilter').data('daterangepicker').endDate.format('YYYY-MM-DD')+" 23:59:59"
                }
            },
            order: [
                [0, "desc"]
            ],
            columns: [
                // {
                //     data: 'id',
                //     orderable: false
                // },
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
                    data: 'shipping_name'
                },
                {
                    data: 'shipping_tracking_number'
                }
            ],
            dom: 'Blrtip',
            buttons: [
            {
                extend: 'excel',
                title: 'Order Transaction | '+$('select[name="status"]').val()+' | '+$('#startDateFilter').val(),
                action: function ( e, dt, node, config ){
                 var asyncFunct = new Promise(function(resolve, reject) {
                      dataTable.page.len( -1 ).draw();
                        dataTable.on( 'draw', function () {
                            resolve();
                        } );            
                    });
                    asyncFunct.then((result) => {
                         $.fn.dataTable.ext.buttons.excelHtml5.action.call(this, e, dt, node, config);
                        dataTable.page.len( 10 ).draw();    
                    }); 
              }
            },
            {
                extend: 'pdf',
                title: 'Order Transaction '+$('#startDateFilter').val(),
                action: function ( e, dt, node, config ){
                 dataTable.page.len( -1 ).draw();
                    var asyncFunct = new Promise(function(resolve, reject) {
                     
                        dataTable.on( 'draw', function () { 
                            resolve();
                        } );            
                    });
                    asyncFunct.then((result) => {
                         $.fn.dataTable.ext.buttons.pdfHtml5.action.call(this, e, dt, node, config);
                        dataTable.page.len( 10 ).draw();    
                    }); 
             }
            },
            {
                extend: 'print',
                title: 'Order Transaction '+$('#startDateFilter').val()
            }
        ]
        });

        $('input[name="invoice_id"]').on("keyup keydown", function(e) {
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