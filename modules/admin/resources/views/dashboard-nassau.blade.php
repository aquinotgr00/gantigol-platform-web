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
                        <label>Area Chart</label>
                        <button id="btnGroupDrop1" type="button" class="btn btn-summary dropdown-toggle ml-5"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 30 Days
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="#">Last 30 Days</a>
                            <a class="dropdown-item" href="#">Last 365 Days</a>
                        </div>
                    </div>
                </div>
                <div class="card-body pl-0 pr-0">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
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
                        <label>Pie Chart</label>
                        <button id="btnGroupDrop1" type="button" class="btn btn-summary dropdown-toggle ml-5"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 30 Days
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="#">Last 30 Days</a>
                            <a class="dropdown-item" href="#">Last 365 Days</a>
                        </div>
                    </div>
                </div>
                <div class="card-body pl-0 pr-0">
                    <div class="chart-pie pt-4">
                        <canvas id="myPieChart"></canvas>
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
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Total Order</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th><img src="images/product-images/gg-01.jpeg" alt="#"></th>
                                    <td>T-SHIRT GG BLACK » M</td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <th><img src="images/product-images/gg-01.jpeg" alt="#"></th>
                                    <td>T-SHIRT GG BLACK » M</td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <th><img src="images/product-images/gg-01.jpeg" alt="#"></th>
                                    <td>T-SHIRT GG BLACK » M</td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <th><img src="images/product-images/gg-01.jpeg" alt="#"></th>
                                    <td>T-SHIRT GG BLACK » M</td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <th><img src="images/product-images/gg-01.jpeg" alt="#"></th>
                                    <td>T-SHIRT GG BLACK » M</td>
                                    <td>100</td>
                                </tr>
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
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Post Title</th>
                                    <th scope="col">Visitors</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Dikeroyok Pelatih Asing di Piala Presiden, Pelatih Persebaya Tak Minder</th>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <th>Exco PSSI: Yang Hoaks Itu Gusti Randa</th>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <th>3 Tim Tamu Sukses ke Semifinal Piala Presiden 2019</th>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <th>Highlights Premier League: Cardiff City 1-2 Chelsea</th>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <th>Madura United Pilih Pulang ke Bangkalan sebelum Hadapi Persebaya</th>
                                    <td>100</td>
                                </tr>
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
        chartInitiatedSales(defaultFormat)
    });

    $('#btnGroupDropSales').change(function() {
        if($(this).val() =="year"){
            defaultFormat = "year"
        }
             chartInitiatedSales(defaultFormat)
        });

    $('#btnGroupDropCardProduct').change(function() {
            cardItemReguler()
        });
    $('#btnGroupDropCardSales').change(function() {
            cardSalesReguler()
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