@extends('admin::layout-nassau')

@push('styles')
<style>
    /* Make the image fully responsive */
    .carousel-inner img {
        width: 100%;
        height: 480px;
    }
</style>

@endpush

@push('scripts')
<script>
    $(document).ready(function () {

        $('#btn-close-preorder').on('click', function () {
            if (confirm('Are u sure?')) {
                $.ajax({
                    type: "POST",
                    url: $(this).attr('href'),
                    data: {
                        'status': $(this).data('status'),
                        '_token': "{{ csrf_token() }}"
                    },
                    dataType: "json",
                    cache: false,
                    success: function (data) {
                        if (typeof data.data.id !== "undefined") {
                            alert('Success ! Preorder closed');
                            window.location.href = "{{ route('list-preorder.show',$preOrder->id) }}";
                        } else {
                            alert('Error ! faield to close Preorder :(');
                        }
                    }
                });
            }
            return false;
        });
    });
</script>
@endpush

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="clearfix">
            <div class="float-left">
                <a class="btn btn-default btn-sm" href="{{ route('list-preorder.index') }}">Back</a>
                <strong>{{ (isset($preOrder->product->name))? $preOrder->product->name : 'Untitled'   }}</strong>
            </div>
            <div class="float-right">
                @if(
                isset($preOrder->product->status) &&
                $preOrder->product->status == 'publish'
                )
                <a href="{{ route('preorder.close',$preOrder->id) }}" class="btn btn-sm btn-danger"
                    data-status="{{ $preOrder->product->status }}" id="btn-close-preorder">
                    Close preorder
                </a>
                @endif
                
                @can('edit-preorder')
                <a class="btn btn-outline-primary btn-sm" href="{{ route('list-preorder.edit',$preOrder) }}">
                    Edit Preorder
                </a>
                @endcan

                @can('view-transaction')
                <a class="btn btn-primary btn-sm" href="{{ route('pending.transaction',$preOrder) }}">
                    Transaction
                </a>
                @endcan
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        @if($preOrder->product->images->count() > 0)
                        @foreach($preOrder->product->images as $key => $value)
                        <li data-target="#demo" data-slide-to="{{ $key }}" class="active"></li>
                        @endforeach
                        @endif
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        @if($preOrder->product->images->count() > 0)
                        @foreach($preOrder->product->images as $key => $value)
                        <div class="carousel-item {{ ($key == 0)? 'active': '' }}">
                            <img src="{{ $value->product_id }}" alt="{{ $preOrder->product->name  }} image" width="1100"
                                height="500">
                        </div>
                        @endforeach
                        @else
                        <div class="carousel-item active">
                            <img src="{{ asset('vendor/preorder/images/featured-image-placeholder.jpg') }}"
                                alt="default image" width="1100" height="500">
                        </div>
                        @endif
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
                <div>
                    <strong>Product Tags</strong>
                    <hr>
                    <span class="badge badge-primary">Primary</span>
                    <span class="badge badge-secondary">Secondary</span>
                    <span class="badge badge-success">Success</span>
                    <span class="badge badge-danger">Danger</span>
                    <span class="badge badge-warning">Warning</span>
                    <span class="badge badge-info">Info</span>
                    <span class="badge badge-light">Light</span>
                    <span class="badge badge-dark">Dark</span>
                </div>
            </div>
            <div class="col-md-8">
                <h4>{{ (isset($preOrder->product->name))? $preOrder->product->name : 'Untitled'   }}
                    @if(isset($preOrder->product->status))
                    <span class="badge badge-info">{{ strtoupper($preOrder->product->status) }}</span>
                    @else
                    <span class="badge badge-info">Draft</span>
                    @endif
                </h4>
                <small>Created at {{ $preOrder->created_at->format('l, M d Y h:i:s') }} Last updated at
                    {{ $preOrder->updated_at->diffForHumans() }}</small>
                <p>{!! (isset($preOrder->product->description))? $preOrder->product->description : '' !!}</p>
                <div class="row">
                    <div class="col">
                        <small>Price</small>
                        <h4>Rp {{ (isset($preOrder->product->price))? number_format($preOrder->product->price) : '' }},-
                        </h4>
                    </div>
                    <div class="col">
                        <small>Weight</small>
                        <h5>{{ (isset($preOrder->product->weight))? $preOrder->product->weight : '-' }}
                            <strong>gram</strong></h5>
                    </div>
                    <div class="col">
                        <!----<a href="#" class="btn btn-secondary">
                            <i class="fa fa-share"></i>
                            &nbsp;Share Preorder
                        </a>-->
                    </div>
                </div>
                <strong>Preorder Information</strong>
                <div class="row">
                    <div class="col">
                        <small>Quota</small>
                        <h3>{{ $preOrder->quota }}</h3>
                    </div>
                    <div class="col">
                        <small>Order Received</small>
                        <h3>{{ $preOrder->order_received }}</h3>
                    </div>
                    <div class="col">
                        <small>End Date</small>
                        <h3>{{ $preOrder->end_date }}</h3>
                        <strong class="text-danger">
                            @php
                            $countdown = \Carbon\Carbon::now()->diffInDays($preOrder->end_date, false);
                            @endphp
                            {{ ($countdown > 0)? $countdown.' Days Remaining' :  'Expired' }}
                        </strong>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <h5>Product Variant</h5>    
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Variant</th>
                                    <th>Sub Variant</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($preOrder->product->variants as $key => $value)
                               
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection