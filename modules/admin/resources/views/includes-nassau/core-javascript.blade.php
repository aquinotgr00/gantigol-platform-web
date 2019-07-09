<!-- Bootstrap core JavaScript-->
<script src="{{ asset('vendor/admin/js/jquery/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/bootstrap/popper.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/bootstrap/bootstrap.min.js') }}"></script>
<script src="//js.pusher.com/3.1/pusher.min.js"></script>
<script>
  $(function() {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>
@if(class_exists('Modules\Preorder\PreOrder'))
<script type="text/javascript">
  // this put your api token in every jquery ajax request
  $.ajaxSetup({
    headers: {
      Authorization: 'Bearer:' + $('meta[name="api-token"]').attr("content")
    }
  });

  // notification stuff
  // https://pusher.com/tutorials/web-notifications-laravel-pusher-channels
  var notificationsWrapper = $('div.dropdown-wrapper');
  var notificationsToggle = $('a.dropdown-toggle-notif');
  var notificationsCountElem = notificationsToggle.find('span[data-count]');
  var notificationsCount = parseInt(notificationsCountElem.data('count'));
  var notifications = notificationsWrapper.find('div[aria-labelledby="dropdownMenuLink"]');


  if (notificationsCount <= 0) {
    notificationsWrapper.hide();
  }

  // Enable pusher logging - don't include this in production
  // Pusher.logToConsole = true;

  var pusher = new Pusher('{{ env("PUSHER_APP_KEY", "4be654ef96dfaa10d9d1") }}', {
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
  channel.bind('Modules\\Preorder\\Events\\QuotaFulfilled', function(data) {
    
    var existingNotifications = notifications.html();
    var newNotificationHtml = `<a class="dropdown-item" href="` + data.url + `">` + data.message + `</a>`;
    notifications.html(newNotificationHtml + existingNotifications);

    notificationsCount += 1;
    notificationsCountElem.attr('data-count', notificationsCount);
    $('span[data-count]').text(notificationsCount);
    notificationsWrapper.show();

  });
</script>
@endif
<!-- Custom scripts for all pages-->