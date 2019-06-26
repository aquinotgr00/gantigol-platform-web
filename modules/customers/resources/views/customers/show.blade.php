@extends('admin::layout-nassau')

@useDatatables()

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet">
@endpush

@section('content')
<!-- start info -->
<div class="row">
    <div class="col-4">
        <div class="row">
            <div class="col-md">
                <label>Customer Info</label>
            </div>
            <div class="col-md mt-2">
                <span data-toggle=modal role="button" data-target="#EditCustomerInfo">
                    <button class="btn btn-edit-frm float-right" data-toggle="tooltip" data-placement="top"
                        data-original-title="Edit Customer Info"></button>
                </span>
            </div>
        </div>
        <hr class="mt-0">
        <div class="form-group">
            <label>Name</label>
            <p>{{ ucwords($customer->name) }}</p>
        </div>
        <div class="form-group">
            <label>Address</label>
            <p>{{ ucfirst($customer->address) }}</p>
        </div>
        <div class="form-group">
            <label>Subdistrict</label>
            <p>{{ (isset($customer->subdistrict->name))? $customer->subdistrict->name : '' }}</p>
        </div>
        <div class="form-group">
            <label>City</label>
            <p>{{ (isset($customer->subdistrict->name))? $customer->subdistrict->city->name : '' }}</p>
        </div>
        <div class="form-group">
            <label>Province</label>
            <p>{{ (isset($customer->subdistrict->name))? $customer->subdistrict->city->province->name : '' }}</p>
        </div>
        <div class="form-group">
            <label>Zip Code</label>
            <p>{{ (isset($customer->subdistrict->name))? $customer->subdistrict->city->postal_code : '' }}</p>
        </div>
        <div class="form-group">
            <label>Phone Number </label>
            <p>{{ $customer->phone }}</p>
        </div>
        <div class="form-group">
            <label>Email</label>
            <p>{{ $customer->email }}</p>
        </div>
    </div>

    @php
    $orders = $customer->orders()->paginate(5);
    @endphp
    <div class="col-sm grs">
        <div>
            <label>Order History</label>
        </div>
        <hr class="mt-0">
        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter Orders
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" class="filter-order" data-filter="" data-text="All" href="#">All</a>
            @foreach(array_keys(config('ecommerce.order.status')) as $i => $order_filter)
            @if($i != 6)
            <a class="dropdown-item" class="filter-order" data-filter={{$i}} data-text="{{$order_filter}}" href="#">
                {{$order_filter}}
            </a>
            @endif
            @endforeach
        </div>
        <input type="hidden" name="status" />
        <div class="row mt-4">
            <div class="col col-xs-4 pgntn">Showing 1 to 5 of 24 enteries</div>
            <div class="col col-xs-8 pgntn">
                <ul class="pagination hidden-xs pull-right">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">»</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                    <li class="page-item">of 3</li>
                </ul>
            </div>
            <div class="table-responsive">
                <table class="table mt-4">
                    <thead>
                        <tr>
                            <th scope="col">Order Date</th>
                            <th scope="col">Invoice ID</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td>
                                {{ $order->created_at->format('d-m-Y') }}
                                <br>
                                <small>{{ $order->created_at->format('H:i:s') }}</small>
                            </td>
                            <td>{{ $order->invoice_id }}</td>
                            <td>{{ array_flip(config('ecommerce.order.status'))[$order->order_status] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- end info -->

@include('customers::customers.modal-edit',$customer)
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
<script>
    $(document).ready(function () {

        var dataTable = $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: {
                url: '{{ route("list-customer.show",$customer->id) }}',
                method: 'GET',
                data: function (d) {
                    d._token = "{{ csrf_token() }}",
                        d.status = $('input[name="status"]').val()
                }
            },
            order: [[0, "desc"]],
            columns: [
                { data: 'id', orderable: false },
                { data: 'created_at' },
                { data: 'invoice_id' },
                { data: 'billing_name' },
                { data: 'shipping_name' },
                { data: 'order_status' }
            ]
        });

        $('.dropdown-menu a').on("click", function (e) {
            $('input[name="activity"]').val($(this).text());
            dataTable.draw();
        });

        $('select[name="subdistrict_id"]').select2({
            ajax: {
                url: '{{ url("shipment/subdistrict") }}',
                dataType: 'json',
                data: function(params) {
                    var query = {
                        q: params.term
                    }
                    return query;
                },
                processResults: function(res) {
                    // Tranforms the top-level key of the response object from 'items' to 'results'
                    return {
                        results: res.data
                    };
                }
            }
        });

        $('select[name="subdistrict_id"]').on('select2:select', function(e) {
            var data = e.params.data;
            $('#province').text(data.city.province.name);
            $('#city').text(data.city.name);
            $('#zip_code').text(data.city.postal_code);
            $('#province').text(data.city.province.name);
            $('#city').text(data.city.name);
            $('#zip_code').text(data.city.postal_code);
        });
    });

</script>
@endpush