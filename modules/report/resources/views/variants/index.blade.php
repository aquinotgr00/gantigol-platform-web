@extends('admin::layout-nassau')

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.css" rel="stylesheet" />
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/admin/css/style.datatables.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/admin/css/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@section('content')

<h2 class="mt-3 mb-4" id="title-date"></h2>
            <div class="row mb-5">
              <div class="col-md">
                <div class="card summary-top-card">
                  <div class="card-body">
                    <div class="card-title mb-0">
                        <label>Active Order Today</label>
                    </div>
                    <h1 id="itemActive">Calculating ..</h1>
                    <p><span class="percentage-down" id="percentageActive">Calculating ...</span> </p>
                  </div>
                </div>
              </div>
              <div class="col-md">
                <div class="card summary-top-card">
                  <div class="card-body">
                    <div class="card-title mb-0">
                        <label>Pending Order</label>
                    </div>
                    <h1 id="salesPending">Calculating ...</h1>
                    <p><span class="percentage-down" id="percentagePending">Calculating ...</span> vs Last 30 Days</p>
                  </div>
                </div>
              </div>
              <div class="col-md">
                <div class="card summary-top-card">
                  <div class="card-body">
                    <div class="card-title mb-0">
                        <label>Transaction Success</label>
                    </div>
                    <h1 id="salesPaid">Calculating ...</h1>
                    <p><span class="percentage-down" id="percentagePaid">Calculating ...</span> vs Last 30 Days</p>
                  </div>
                </div>
              </div>
            </div>
        <!-- start tools -->
        <div class="row mb-3">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="searchDate">Order Date</label>
                    <select name="filterdate" class="form-control" id="filterdate">
                        <option value="week">Last 7 days</option>
                        <option value="month">Last Months</option>
                        <option value="year">Last Year</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="searchDate">Variant</label>
                    <select name="filtervariant" class="form-control" id="filtervariant">
                        <option value="ALL SIZE">ALL SIZE</option>
                        @foreach($variants as $key=>$value)
                        <option value="{{$value->value}}">{{ucwords($value->attribute)}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="searchDate">Attribute</label>
                    <select name="filterattribute" class="form-control" id="filterattribute">
                        <option value="ALL SIZE">ALL SIZE</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3 d-none">
                <div class="form-group">
                    <label for="searchInvoice">Order Date</label>
                    <input type="text" name="startdate" class="form-control" id="startDateFilter">
                </div>
            </div>
            <div class="col-md-3 d-none">
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
        </div>
        <!-- end tools -->
            <div class="card">
              <div class="card-body">
                <div class="card-title">
                  <label>Area Chart</label>
                  <div class="card-body pl-0 pr-0">
                    <div class="chart-area">
                      <canvas id="myAreaChart"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>

<!-- start table -->
<h2 class="mt-5 mb-2">Ordered By Date</h2>
<div class="table-responsive">
    <table class="table table-hover" id="dataTable">
        <thead>
            <tr>
                <th scope="col">Order Date</th>
                <th scope="col">Invoice ID</th>
                <th scope="col">Name</th>
                <th scope="col">Product</th>
                <th scope="col">Prize</th>
                <th scope="col">Discount</th>
                <th scope="col">Total Payment</th>

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

<!-- Page level plugins -->
  <script src="{{ asset('vendor/admin/vendor/chart.js/Chart.min.js')}}"></script>

<script>
    var chartY
    var chartX
    var salesReguler = 0
    var salesRegulerPercentage = 0
    $(document).ready(function() {
        var delay = (function(){
              var timer = 0;
              return function(callback, ms, that){
                clearTimeout (timer);
                timer = setTimeout(callback.bind(that), ms);
              };
            })();

       $('#filtervariant').change(function() {
            var variant = $(this).val()
             variant = variant.split(",");
             $('#filterattribute').html("")
             $.each( variant, function( key, value ) {
              $('#filterattribute').append('<option value="'+value+'">'+value+'</option>');
            });
             dataTable.draw()
             chartInitiated()
        });
       $('#filterattribute').change(function() {
            dataTable.draw()
            chartInitiated()
        });
        $('#title-date').html("This month ("+moment().startOf('month').format("D MMMM")+" - "+moment().format("D MMMM")+")")
        $('#startDateFilter').daterangepicker({
            dateFormat: 'yyyy-mm-dd',
            startDate: moment().startOf($('#filterdate').val()),
            endDate: moment().endOf($('#filterdate').val()),
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
                    d.enddate = $('#startDateFilter').data('daterangepicker').endDate.format('YYYY-MM-DD')+" 23:59:59",
                    d.attributesize = $('#filterattribute').val()
                }
            },
            order: [
                [0, "desc"]
            ],
            columns: [
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
                    data: 'items'
                },
                {
                    data: 'price'
                },
                {
                    data:'discount'
                },
                {
                    data:'total_amount'
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
           delay(function(){
                dataTable.draw();
                  }, 1000, this);
        });

        $('.dt-buttons').css('display', 'none');
        $('#reset-all').click(function() {
            $("#filterdate option:selected").prop("selected", false)
            $('#startDateFilter').data('daterangepicker').setStartDate(moment().startOf($('#filterdate').val()).format("YYYY-MM-DD"));
            $('#startDateFilter').data('daterangepicker').setEndDate(moment().endOf($('#filterdate').val()).format("YYYY-MM-DD"));
            dataTable.settings()[0].jqXHR.abort()
            dataTable.draw();
            chartInitiated()
        });
        $('#filterdate').change(function() {
            $('#startDateFilter').data('daterangepicker').setStartDate(moment().startOf($('#filterdate').val()).format("YYYY-MM-DD"));
            $('#startDateFilter').data('daterangepicker').setEndDate(moment().endOf($('#filterdate').val()).format("YYYY-MM-DD"));
            dataTable.settings()[0].jqXHR.abort()
            dataTable.draw();
             chartInitiated()
        });

    });
</script>
<script>
     
    $(document).ready(function() {
        
        chartInitiated()
        cardSalesPaidNow()
        cardSalesPending()
        cardSalesPaid()
    });

    function chartInitiated(){
         var request = $.ajax({
          url: '{{ route("paid-order.chart.variant") }}',
          method: "get",
         data: { 
            startdate : $('#startDateFilter').data('daterangepicker').startDate.format('YYYY-MM-DD')+" 00:00:00",
            enddate : $('#startDateFilter').data('daterangepicker').endDate.format('YYYY-MM-DD')+" 23:59:59",
            filter :  $("#filterdate").val(),
            attribute: $('#filterattribute').val()
          }
        });
        request.done(function( data ) {
            chartY = [];
            chartX =[];

          $.each( data, function( key, value ) {
            chartY.push(key);
            chartX.push(value);
            });
            // Area Chart Example
                var ctx = document.getElementById("myAreaChart");
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: chartY,
                        datasets: [{
                            label: '# of Variant '+$('#filterattribute').val(),
                            data: chartX,
                            lineTension: 0.3,
                            backgroundColor: "rgba(78, 115, 223, 0.05)",
                            borderColor: "rgba(78, 115, 223, 1)",
                            pointRadius: 3,
                            pointBackgroundColor: "rgba(78, 115, 223, 1)",
                            pointBorderColor: "rgba(78, 115, 223, 1)",
                            pointHoverRadius: 3,
                            pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                            pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                            pointHitRadius: 10,
                            pointBorderWidth: 2,
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }],
                            xAxes:[{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });
        });
    }

    function cardSalesPaidNow(){

        var request = $.ajax({
          url: '{{ route("paid-order.card.sales") }}',
          method: "get",
         data: { 
            startdate : moment().format('YYYY-MM-DD')+" 00:00:00",
            enddate : moment().format('YYYY-MM-DD')+" 23:59:59",
            laststarttdate : moment().subtract(1, 'months').format('YYYY-MM-DD')+" 00:00:00",
            lastenddate : moment().subtract(1, 'months').format('YYYY-MM-DD')+" 23:59:59",
            filter :  "month",
            status:[1,3,5]
          }
        });
        request.done(function( data ) {
            $('#itemActive').html(data.sales)
            $('#percentageActive').html(moment().startOf('month').format("D MMMM"))
        })
    }
    function cardSalesPending(){

        var request = $.ajax({
          url: '{{ route("paid-order.card.sales") }}',
          method: "get",
         data: { 
            startdate : moment().startOf('month').format('YYYY-MM-DD')+" 00:00:00",
            enddate : moment().endOf('month').format('YYYY-MM-DD')+" 23:59:59",
            laststarttdate : moment().subtract(1, 'months').startOf('month').format('YYYY-MM-DD')+" 00:00:00",
            lastenddate : moment().subtract(1, 'months').endOf('month').format('YYYY-MM-DD')+" 23:59:59",
            filter :  "month",
            status:[0]
          }
        });
        request.done(function( data ) {
            $('#salesPending').html(data.sales)
            $('#percentagePending').html(data.percentage+"%")
        })
    }

    function cardSalesPaid(){

        var request = $.ajax({
          url: '{{ route("paid-order.card.sales") }}',
          method: "get",
         data: { 
            startdate : moment().startOf('month').startOf('month').format('YYYY-MM-DD')+" 00:00:00",
            enddate : moment().endOf('month').endOf('month').format('YYYY-MM-DD')+" 23:59:59",
            laststarttdate : moment().subtract(1, 'months').startOf('month').format('YYYY-MM-DD')+" 00:00:00",
            lastenddate : moment().subtract(1, 'months').endOf('month').format('YYYY-MM-DD')+" 23:59:59",
            filter :  "month",
            status:[1,3,5]
          }
        });
        request.done(function( data ) {
            $('#salesPaid').html(data.sales)
            $('#percentagePaid').html(data.percentage+"%")
        })
    }

    function addThousandSeparator(nStr)
    {
        nStr += '';
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + '.' + '$2');
        }
        return x1 + x2+",00";
    }
</script>
@endpush