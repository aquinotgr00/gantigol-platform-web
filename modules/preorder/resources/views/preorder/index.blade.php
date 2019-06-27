@extends('admin::layout-nassau')

@push('scripts')
<script src="//js.pusher.com/3.1/pusher.min.js"></script>
<script>
    function resetPreorder(obj) {
        var ajaxRequest = $(obj).data('url');

        if (confirm('Are you sure?')) {

            $.ajax({
                type: 'POST',
                url: ajaxRequest,
                dataType: 'json',
                data: {
                    _token: "{{ csrf_token() }}"
                },
                success: function(res) {
                    if (res.data.id > 0) {
                        alert('Success! Preorder reset from 0');
                        location.reload();
                    } else {
                        console.log(res);
                    }
                }
            });
        }

        return false;
    }

    $(document).ready(function() {

        var delay = (function() {
            var timer = 0;
            return function(callback, ms, that) {
                clearTimeout(timer);
                timer = setTimeout(callback.bind(that), ms);
            };
        })();

        var datatables = $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route("list-preorder.index") }}',
                method: 'GET'
            },
            columns: [{
                    data: 'product.created_at'
                },
                {
                    data: 'image'
                },
                {
                    data: 'product.name'
                },
                {
                    data: 'end_date'
                },
                {
                    data: 'order_received'
                },
                {
                    data: 'product.price'
                },
                {
                    data: 'action'
                },
            ],
            order: [
                [0, "desc"]
            ],
            columnDefs: [{
                "targets": [0],
                "visible": false,
                "searchable": false
            }],
            drawCallback: function(settings) {
                $('[data-toggle="tooltip"]').tooltip()
            }
        });

        $('#dataTable_filter').css('display', 'none');

        $('#search').on('keyup', function() {
            delay(function() {
                datatables.search(this.value).draw();
            }, 1000, this);
        });

        // this put your api token in every jquery ajax request
        $.ajaxSetup({
            headers: {
                Authorization: 'Bearer:' + $('meta[name="api-token"]').attr("content")
            }
        });

        // notification stuff
        // https://pusher.com/tutorials/web-notifications-laravel-pusher-channels
        var notificationsWrapper = $('.alert-notifications');
        var notificationsCountElem = $('i.count-notification');
        var notificationsCount = parseInt(notificationsCountElem.data('count'));
        var notifications = notificationsWrapper.find('div.item-notification');

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
            console.log(data);
            var existingNotifications = notifications.html();
            var newNotificationHtml = `<div class="alert alert-primary" role="alert">` + data.message + `
        <a href="` + data.url + `" class="dropdown-item">
            Set Preorder
        </a></div>`;

            notifications.html(newNotificationHtml + existingNotifications);

            notificationsCount += 1;
            notificationsCountElem.attr('data-count', notificationsCount);
            notificationsWrapper.find('.notif-count').text(notificationsCount);
            notificationsWrapper.show();
        });
    });
</script>
@endpush

@section('content')

@can('edit-preorder')
<input type="hidden" name="edit-preorder" value="1">
@endcan

@php

$user = Auth::user();

$args = ['title'=>'Preorders'];

if (Gate::forUser($user)->allows('create-preorder')) {
    $args['addNewAction'] = route('list-preorder.create'); 
}

@endphp

@indexPage($args)

<div class="alert-notifications">
    <div class="item-notification"></div>
</div>
<i data-count="0" class="count-notification"></i>

<!-- start table -->
<table class="table" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>#</th>
            <th>Image</th>
            <th>Product Name</th>
            <th>Po Due</th>
            <th>Order Received</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
</table>
<!-- end table -->
@endindexPage
@endsection