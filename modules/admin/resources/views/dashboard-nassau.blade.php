@extends('admin::layout-nassau')

@section('content')

<!-- start top card -->
<div class="row mb-5">
    <div class="col-md">
        <div class="card summary-top-card">
            <div class="card-body">
                <div class="card-title mb-0 row">
                    <div class="col-md">
                        <label>Total Products Sold</label>
                    </div>
                    <div class="col-md">
                        <button id="btnGroupDrop1" type="button" class="btn btn-summary dropdown-toggle pull-right"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 30 Days
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="#">Last 7 Days</a>
                            <a class="dropdown-item" href="#">Last 365 Days</a>
                        </div>
                    </div>
                </div>
                <h1>300</h1>
                <p><span class="percentage-up">+3.41%</span> vs Last 30 Days</p>
            </div>
        </div>
    </div>

    <div class="col-md">
        <div class="card summary-top-card">
            <div class="card-body">
                <div class="card-title mb-0 row">
                    <div class="col-md">
                        <label>Total Sales</label>
                    </div>
                    <div class="col-md">
                        <button id="btnGroupDrop1" type="button" class="btn btn-summary dropdown-toggle pull-right"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 30 Days
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="#">Last 7 Days</a>
                            <a class="dropdown-item" href="#">Last 365 Days</a>
                        </div>
                    </div>
                </div>
                <h1>2.000.000</h1>
                <p><span class="percentage-down">+3.41%</span> vs Last 30 Days</p>
            </div>
        </div>
    </div>

    <div class="col-md">
        <div class="card summary-top-card">
            <div class="card-body">
                <div class="card-title mb-0 row">
                    <div class="col-md">
                        <label>Avg Time on Page</label>
                    </div>
                    <div class="col-md">
                        <button id="btnGroupDrop1" type="button" class="btn btn-summary dropdown-toggle pull-right"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 30 Days
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="#">Last 7 Days</a>
                            <a class="dropdown-item" href="#">Last 365 Days</a>
                        </div>
                    </div>
                </div>
                <h1>00:03:01</h1>
                <p><span class="percentage-up">+3.41%</span> vs Last 30 Days</p>
            </div>
        </div>
    </div>



</div>
<!-- end top card -->

<!-- start second card -->

<div class="card mb-5">
    <div class="card-body">
        <div class="card-title row">
            <div class="col">
                <label>Bar Chart</label>
                <button id="btnGroupDrop1" type="button" class="btn btn-summary dropdown-toggle ml-5"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 30 Days
                </button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" href="#">Last 7 Days</a>
                    <a class="dropdown-item" href="#">Last 365 Days</a>
                </div>
            </div>
        </div>
        <div class="card-body pl-0 pr-0">
            <div class="chart-bar">
                <canvas id="myBarChart"></canvas>
            </div>
        </div>
    </div>
</div>

<!-- end second card -->

<!-- start third card -->

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
                            <a class="dropdown-item" href="#">Last 7 Days</a>
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
                            <a class="dropdown-item" href="#">Last 7 Days</a>
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
<!-- end third card -->

<!-- start fourth card -->

<div class="row mb-5">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="card-title row">
                    <div class="col-md">
                        <label>Tabel Chart</label>
                        <button id="btnGroupDrop1" type="button" class="btn btn-summary dropdown-toggle ml-5"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 30 Days
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="#">Last 7 Days</a>
                            <a class="dropdown-item" href="#">Last 365 Days</a>
                        </div>
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
                        <label>Tabel Chart</label>
                        <button id="btnGroupDrop1" type="button" class="btn btn-summary dropdown-toggle ml-5"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 30 Days
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="#">Last 7 Days</a>
                            <a class="dropdown-item" href="#">Last 365 Days</a>
                        </div>
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
<!-- Page level plugins -->
<script src="{{ asset('vendor/admin/vendor/chart.js/Chart.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('vendor/admin/js/chart-area-demo.js') }}"></script>
<script src="{{ asset('vendor/admin/js/chart-pie-demo.js') }}"></script>
<script src="{{ asset('vendor/admin/js/chart-bar-demo.js') }}"></script>
<script src="//js.pusher.com/3.1/pusher.min.js"></script>
  <script>
  // this put your api token in every jquery ajax request
  $.ajaxSetup({
    headers: {
      Authorization: 'Bearer:' + $('meta[name="api-token"]').attr("content")
    }
  });

  // notification stuff
  // https://pusher.com/tutorials/web-notifications-laravel-pusher-channels
  var notificationsWrapper   = $('.alert-notifications');
  var notificationsCountElem = $('i.count-notification');
  var notificationsCount     = parseInt(notificationsCountElem.data('count'));
  var notifications          = notificationsWrapper.find('div.item-notification');

  if (notificationsCount <= 0) {
    notificationsWrapper.hide();
  }

  // Enable pusher logging - don't include this in production
  Pusher.logToConsole = true;

  var pusher = new Pusher('a80d8a4837ae36fd302d', {
    cluster: 'ap1',
    useTLS: true,
    encrypted: true
  });

  // Subscribe to the channel we specified in our Laravel Event
  var channel = pusher.subscribe('quota-fulfilled');

  channel.bind('pusher:subscription_succeeded', function(members) {
      console.log('successfully subscribed!');
  });

  // Bind a function to a Event (the full Laravel class)
  channel.bind('\\Modules\\Preorder\\Events\\QuotaFulfilled', function(data) {
    var existingNotifications = notifications.html();
    var newNotificationHtml = `<div class="alert alert-primary" role="alert">`+data.message+`
        <a href="`+data.url+`" class="dropdown-item">
            Set Preorder
        </a></div>`;

    notifications.html(newNotificationHtml + existingNotifications);

    notificationsCount += 1;
    notificationsCountElem.attr('data-count', notificationsCount);
    notificationsWrapper.find('.notif-count').text(notificationsCount);
    notificationsWrapper.show();
  });
  </script>
  <!-- Argon JS -->
  <script src="{{ asset('js/argon.js?v=1.0.0') }}"></script>
  <!-- custom script -->
@endpush