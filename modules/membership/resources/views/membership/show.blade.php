@extends('admin::layout-nassau')

@useDatatables

@section('content')
@pageHeader(['title'=>ucwords($member->name),'back'=>route('list-membership.index')])
<!-- start info -->
<div class="row">
    <div class="col-4">
        <div class="row">
            <div class="col-md">
                <label>Member Info</label>
            </div>
            <div class="col-md mt-2">
                
            </div>
        </div>
        <hr class="mt-0">
        <div class="form-group">
            <label>Name</label>
            <p>{{ ucwords($member->name) }}</p>
        </div>
        <div class="form-group">
            <label>Address</label>
            <p>{{ ucfirst($member->address) }}</p>
        </div>
        <div class="form-group">
            <label>Zip Code</label>
            <p>{{ $member->zip_code }}</p>
        </div>
        <div class="form-group">
            <label>Phone Number </label>
            <p>{{ $member->phone }}</p>
        </div>
        <div class="form-group">
            <label>Email</label>
            <p>{{ $member->email }}</p>
        </div>
    </div>

    @php
        $orders = $member->customer->orders()->paginate(5);
        //$orders = [];
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

@endsection

@push('scripts')
<script>
    

</script>
@endpush