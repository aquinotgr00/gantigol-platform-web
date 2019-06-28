@extends('admin::layout-nassau')

@section('content')

<!-- start top card -->
<div class="row mb-5">
    <div class="col-md">
        <div class="card summary-top-card">
            <div class="card-body">
                <div class="card-title mb-0 row">
                    <div class="col-md-6">
                        <label>Total Products Sold</label>
                    </div>
                    <div class="col-md-3">
                        <select id="btnGroupDropCardProduct"  name"productcard" type="button" class="btn btn-summary dropdown-toggle ml-3">
                            <option  value="month">Last 30 Days</option>
                            <option value="year">Last 365 Days</option>
                        </select>
                    </div>
                </div>
                <h1 id="itemReguler">Calculating ..</h1>
                <p><span class="percentage-up" id="percentageItems">Calculating ..</span> vs Last 30 Days</p>
            </div>
        </div>
    </div>

    <div class="col-md">
        <div class="card summary-top-card">
            <div class="card-body">
                <div class="card-title mb-0 row">
                    <div class="col-md-6">
                        <label>Total Sales</label>
                    </div>
                    <div class="col-md-3">
                        <select id="btnGroupDropCardSales"  name"salescard" type="button" class="btn btn-summary dropdown-toggle ml-3">
                            <option  value="month">Last 30 Days</option>
                            <option value="year">Last 365 Days</option>
                        </select>
                    </div>
                </div>
                <h1 id="salesReguler">Calculating ..</h1>
                <p><span class="percentage-down" id="percentageSales">Calculating ..</span> vs Last 30 Days</p>
            </div>
        </div>
    </div>

    <div class="col-md">
        <div class="card summary-top-card">
            <div class="card-body">
                <div class="card-title mb-0 row">
                    <div class="col-md-6">
                        <label>Page Views</label>
                    </div>
                    <div class="col-md-3">
                        <select id="btnGroupDropCardPages"  name"pagescard" type="button" class="btn btn-summary dropdown-toggle ml-3">
                            <option  value="month">Last 30 Days</option>
                            <option value="year">Last 365 Days</option>
                        </select>
                    </div>
                </div>
                <h1 id="pagesReguler" >Calculating ..</h1>
                <p><span class="percentage-up" id="percentagePages">Calculating ..</span> vs Last 30 Days</p>
            </div>
        </div>
    </div>
</div>
<!-- end top card -->

<!-- start sales chart -->

<div class="card mb-5">
    <div class="card-body">
        <div class="card-title row">
            <div class="col">
                <label>Sales Chart</label>
                <select id="btnGroupDropSales"  name"salechart" type="button" class="btn btn-summary dropdown-toggle ml-5" >
                    <option  value="month">Last 30 Days</option>
                    <option value="year">Last 365 Days</option>
                </select>
            </div>
        </div>
        <div class="card-body pl-0 pr-0">
            <div class="chart-bar" style="position: relative; height:40vh; ">
                <canvas id="saleChart"></canvas>
            </div>
        </div>
    </div>
</div>

<!-- end sales chart -->

<!-- start post chart -->

<div class="row mb-5">
    <div class="col-xl-8 col-lg-7">
        <div class="card">
            <div class="card-body">
                <div class="card-title row">
                    <div class="col-md">
                        <label>Post Chart</label>
                        <select id="btnGroupDropPages"  name"pagechart" type="button" class="btn btn-summary dropdown-toggle ml-5" >
                            <option  value="month">Last 30 Days</option>
                            <option value="year">Last 365 Days</option>
                        </select>
                    </div>
                </div>
                <div class="card-body pl-0 pr-0">
                    <div class="chart-area">
                        <canvas id="pageChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-5">
        <div class="card">
            <div class="card-body">
                <div class="card-title row">
                    <div class="col-md">
                        <label>Sales Chart</label>
                        <select id="btnGroupDropSalesPie"  name"salechartpie" type="button" class="btn btn-summary dropdown-toggle ml-5" >
                        <option  value="month">Last 30 Days</option>
                        <option value="year">Last 365 Days</option>
                    </select>
                    </div>
                </div>
                <div class="card-body pl-0 pr-0">
                    <div class="chart-pie pt-4">
                        <canvas id="salePieChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- end post chart -->

<!-- start post chart -->

<div class="row mb-5">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="card-title row">
                    <div class="col-md">
                        <label>Tabel Top 5 Sales</label>
                        <select id="btnGroupDropTableSales"  name"salestable" type="button" class="btn btn-summary dropdown-toggle ml-3">
                            <option  value="month">Last 30 Days</option>
                            <option value="year">Last 365 Days</option>
                        </select>
                    </div>
                </div>
                <div class="card-body pl-0 pr-0">
                    <div class="table-responsive">
                        <table class="table" id="tableSales">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">Image</th>
                                    <th scope="col"class="text-center">Product Name</th>
                                    <th scope="col" class="text-center">Total Order</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="card-title row">
                    <div class="col-md">
                        <label>Tabel Top 5 Post</label>
                        <select id="btnGroupDropTablePost"  name"postTable" type="button" class="btn btn-summary dropdown-toggle ml-3">
                            <option  value="month">Last 30 Days</option>
                            <option value="year">Last 365 Days</option>
                        </select>
                    </div>
                </div>
                <div class="card-body pl-0 pr-0">
                    <div class="table-responsive">
                        <table class="table" id="tablePost">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">Post Title</th>
                                    <th scope="col" class="text-center">Visitors</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- end fourth card -->



</div>
@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/moment.min.js"></script>
<script src="{{ asset('vendor/admin/vendor/chart.js/Chart.min.js')}}"></script>
<script>
    $(document).ready(function() {
        var defaultFormat = "month"
        cardSalesReguler()
        cardItemReguler()
        cardPagesReguler()
        chartInitiatedSales(defaultFormat)
        chartInitiatedPages(defaultFormat)
        chartInitiatedSalesPie(defaultFormat)
        tablePosthot()
        tableSaleshot()
    });

    $('#btnGroupDropSales').change(function() {

             chartInitiatedSales($(this).val())
        });
    $('#btnGroupDropPages').change(function() {

             chartInitiatedPages($(this).val())
        });
    $('#btnGroupDropSalesPie').change(function() {

             chartInitiatedSalesPie($(this).val())
        });
    $('#btnGroupDropCardProduct').change(function() {
            cardItemReguler()
        });
    $('#btnGroupDropCardSales').change(function() {
            cardSalesReguler()
        });
    $('#btnGroupDropCardPages').change(function() {
            cardPagesReguler()
        });
    $('#btnGroupDropTablePost').change(function() {
            tablePosthot()
        });
    $('#btnGroupDropTableSales').change(function() {
            tableSaleshot()
        });
    function chartInitiatedSales(defaultFormat){
         var request = $.ajax({
          url: '{{ route("paid-order.chart") }}',
          method: "get",
         data: { 
            startdate : moment().startOf($("#btnGroupDropSales").val()).format('YYYY-MM-DD')+" 00:00:00",
            enddate : moment().endOf($("#btnGroupDropSales").val()).format('YYYY-MM-DD')+" 00:00:00",
            filter :  defaultFormat
          }
        });
        request.done(function( data ) {
            chartY = [];
            chartX =[];

          $.each( data, function( key, value ) {
            chartY.push(key);
            chartX.push(value);
            });

                var ctx = document.getElementById("saleChart");
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: chartY,
                        datasets: [{
                            label: '# of Sales',
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
                            borderWidth: 1,
                        }]
                    },
                    options: {
                        maintainAspectRatio: false,
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
    function chartInitiatedPages(defaultFormat){
         var request = $.ajax({
          url: '{{ route("blog.post.chart") }}',
          method: "get",
         data: { 
            startdate : moment().startOf($("#btnGroupDropPages").val()).format('YYYY-MM-DD')+" 00:00:00",
            enddate : moment().endOf($("#btnGroupDropPages").val()).format('YYYY-MM-DD')+" 00:00:00",
            filter :  defaultFormat
          }
        });
        request.done(function( data ) {
            chartY = [];
            chartX =[];

          $.each( data, function( key, value ) {
            chartY.push(key);
            chartX.push(value);
            });

                var ctx = document.getElementById("pageChart");
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: chartY,
                        datasets: [{
                            label: '# of Post',
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
                            borderWidth: 1,
                        }]
                    },
                    options: {
                        maintainAspectRatio: false,
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
    function chartInitiatedSalesPie(defaultFormat){
         var request = $.ajax({
          url: '{{ route("paid-order.chart.pie") }}',
          method: "get",
         data: { 
            startdate : moment().startOf($("#btnGroupDropSalesPie").val()).format('YYYY-MM-DD')+" 00:00:00",
            enddate : moment().endOf($("#btnGroupDropSalesPie").val()).format('YYYY-MM-DD')+" 00:00:00",
            filter :  defaultFormat
          }
        });
        request.done(function( data ) {
            chartY = [];
            chartX =[];
            chartColors =[];

          $.each( data, function( key, value ) {
            chartY.push(statusOrder(key));
            chartX.push(value);
            chartColors.push(statusColor(key))
            });

                var ctx = document.getElementById("salePieChart");
                var myChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: chartY,
                        datasets: [{
                            label: '# of Sales',
                            data: chartX,
                            backgroundColor: chartColors,
                        }]
                    },
                    options: {
                        maintainAspectRatio: false
                    }
                });
        });
    }
    function statusOrder(value){
        switch(value) {
          case "1":
            return "Paid"
            break;
          case "2":
            return "Shipped"
            break;
          default:
            return "Completed"
        }
    }

    function statusColor(value){
        switch(value) {
          case "1":
            return "Red"
            break;
          case "2":
            return "Blue"
            break;
          default:
            return "Green"
        }
    }
    function cardSalesReguler(){

        var request = $.ajax({
          url: '{{ route("paid-order.card") }}',
          method: "get",
         data: { 
            startdate : moment().startOf($("#btnGroupDropCardSales").val()).format('YYYY-MM-DD')+" 00:00:00",
            enddate : moment().endOf($("#btnGroupDropCardSales").val()).format('YYYY-MM-DD')+" 23:59:59",
            laststarttdate : moment().subtract(1, 'months').startOf('month').format('YYYY-MM-DD')+" 00:00:00",
            lastenddate : moment().subtract(1, 'months').endOf('month').format('YYYY-MM-DD')+" 23:59:59",
            filter :  "month"
          }
        });
        request.done(function( data ) {
            $('#salesReguler').html(addThousandSeparator(data.sales))
            $('#percentageSales').html(data.percentage+"%")
        })
    }
    function cardItemReguler(){

        var request = $.ajax({
          url: '{{ route("paid-order.card.item") }}',
          method: "get",
         data: { 
            startdate : moment().startOf($("#btnGroupDropCardProduct").val()).format('YYYY-MM-DD')+" 00:00:00",
            enddate : moment().endOf($("#btnGroupDropCardProduct").val()).format('YYYY-MM-DD')+" 23:59:59",
            laststarttdate : moment().subtract(1, 'months').startOf('month').format('YYYY-MM-DD')+" 00:00:00",
            lastenddate : moment().subtract(1, 'months').endOf('month').format('YYYY-MM-DD')+" 23:59:59",
            filter :  "month"
          }
        });
        request.done(function( data ) {
            $('#itemReguler').html(data.item)
            $('#percentageItems').html(data.percentage+"%")
        })
    }
    function cardPagesReguler(){

        var request = $.ajax({
          url: '{{ route("blog.post.card") }}',
          method: "get",
         data: { 
            startdate : moment().startOf($("#btnGroupDropCardPages").val()).format('YYYY-MM-DD')+" 00:00:00",
            enddate : moment().endOf($("#btnGroupDropCardPages").val()).format('YYYY-MM-DD')+" 23:59:59",
            laststarttdate : moment().subtract(1, 'months').startOf('month').format('YYYY-MM-DD')+" 00:00:00",
            lastenddate : moment().subtract(1, 'months').endOf('month').format('YYYY-MM-DD')+" 23:59:59",
            filter :  "month"
          }
        });
        request.done(function( data ) {
            $('#pagesReguler').html(data.item)
            $('#percentagePages').html(data.percentage+"%")
        })
    }
    function tableSaleshot(){

        var request = $.ajax({
          url: '{{ route("blog.post.hot") }}',
          method: "get",
         data: { 
            startdate : moment().startOf($("#btnGroupDropTableSales").val()).format('YYYY-MM-DD')+" 00:00:00",
            enddate : moment().endOf($("#btnGroupDropTableSales").val()).format('YYYY-MM-DD')+" 23:59:59",
          }
        });
        request.done(function( data ) {
            $("#tableSales > tbody ").html("")
            $.each( JSON.parse(data), function( key, value ) {
                $("#tableSales > tbody ").append("<tr><td><img width='50px' src='"+value.image+"'></td><td>"+value.title+"</td><td class='text-right'>"+value.counter+"</td></tr>");
            });
        })
    }
    function tablePosthot(){

        var request = $.ajax({
          url: '{{ route("blog.post.hot") }}',
          method: "get",
         data: { 
            startdate : moment().startOf($("#btnGroupDropTablePost").val()).format('YYYY-MM-DD')+" 00:00:00",
            enddate : moment().endOf($("#btnGroupDropTablePost").val()).format('YYYY-MM-DD')+" 23:59:59",
          }
        });
        request.done(function( data ) {
            $("#tablePost > tbody ").html("")
            $.each( JSON.parse(data), function( key, value ) {
                $("#tablePost > tbody ").append("<tr><td>"+value.title+"</td><td class='text-right'>"+value.counter+"</td></tr>");
            });
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