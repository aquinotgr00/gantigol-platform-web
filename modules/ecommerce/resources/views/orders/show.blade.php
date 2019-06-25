@extends('admin::layout-nassau')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<style>
    #dataTable_paginate {
        display: none;
    }

    #dataTable_paginate {
        display: none;
    }

    .dataTables_info {
        display: none;
    }

    .table-responsive {
        overflow-x: hidden;
    }

    .card-default {
        height: 600px;
    }
</style>
@endpush

@push('scripts')
<script src="{{ asset('vendor/admin/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>
@endpush

@section('content')
@pageHeader(['title'=> $order->invoice_id, 'back'=> ($order->order_status != 0)? route('paid-order.index') : route('order-transaction.index') ])

<div class="row">
    <div class="col-12 col-md-4">
        <div class="card card-default">
            <div class="card-body">
                <div class="card-heading-content">
                    <div class="clearfix">
                        <div class="float-left">
                            <h4>Customer Info</h4>
                        </div>
                        <div class="float-right">
                            <!--  <a href="#EditCustomerInfo" data-toggle=modal >
                                <i class="fas fa-pencil-alt"></i>
                            </a> -->
                        </div>
                    </div>
                    <hr>
                </div>

                <div>
                    <div class="form-group">
                        <label>Name</label>
                        @if(isset($order->customer))
                        <p>{{ $order->customer->name }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        @if(isset($order->customer))
                        <p>{{ $order->customer->address }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Subdistrict</label>
                        @if(isset($order->customer->subdistrict))
                        <p>{{ $order->customer->subdistrict->name }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        @if(isset($order->customer->subdistrict->city))
                        <p>{{ $order->customer->subdistrict->city->name }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Province</label>
                        @if(isset($order->customer->subdistrict->city->province))
                        <p>{{ $order->customer->subdistrict->city->province->name }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Zip Code</label>
                        @if(isset($order->customer->subdistrict->city))
                        <p>{{ $order->customer->subdistrict->city->zip_code }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        @if(isset($order->customer))
                        <p>{{ $order->customer->phone }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        @if(isset($order->customer))
                        <p>{{ $order->customer->email }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="card card-default">
            <div class="card-body">
                <div class="card-heading-content">
                    <div class="clearfix">
                        <div class="float-left">
                            <h4>Shipping Info</h4>
                        </div>
                        <div class="float-right">
                            <a href="#editShipping" data-toggle=modal>
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                        </div>
                    </div>
                    <hr>
                </div>

                <div>
                    <div class="form-group">
                        <label>Name</label>
                        <p>{{ $order->shipping_name }}</p>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <p>{{ $order->shipping_address }}</p>
                    </div>
                    <div class="form-group">
                        <label>Subsdistrict</label>
                        <p>{{ $order->shipping_subdistrict }}</p>
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <p>{{ $order->shipping_city }}</p>
                    </div>
                    <div class="form-group">
                        <label>Province</label>
                        <p>{{ $order->shipping_province }}</p>
                    </div>
                    <div class="form-group">
                        <label>Zip Code</label>
                        <p>{{ $order->shipping_zip_code }}</p>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <p>{{ $order->shipping_phone }}</p>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <p>{{ $order->shipping_email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="card card-default">
            <div class="card-body">
                <div class="card-heading-content">
                    <div class="clearfix">
                        <div class="float-left">
                            <h4>Shipping Details</h4>
                        </div>
                        <div class="float-right">
                            <a href="#editStatus" data-toggle=modal>
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <!--<a href="#">
                                <i class="fas fa-shipping-fast"></i>
                            </a>-->
                        </div>
                    </div>
                    <hr>
                </div>

                <div>
                    <div class="form-group">
                        <label>Order Status</label>
                        @php
                        $status_id = $order->order_status;
                        $selected = (isset(array_keys($status)[$status_id]))? array_keys($status)[$status_id] : '';
                        $selected_desc = (isset($desc[$status_id]))? $desc[$status_id] : '';
                        @endphp
                        <p>
                            {{ $selected }}
                            ( {{ $selected_desc }} )
                        </p>
                    </div>

                    <div class="form-group">
                        <label>Tracking Number</label>
                        <p>{{ $order->shipping_tracking_number }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row" style="margin-top: 10px;">
    <div class="col">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable">
                <thead>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Discount (IDR)</th>
                    <th>Subtotal</th>
                </thead>
                @if(isset($order->items))
                <tbody>
                    @foreach($order->items as $key => $value)
                    <tr>
                        <td>
                            <img src="{{ $value->productVariant->product->image }}" height="50px;">
                            @if(isset($value->productVariant->product))
                            {{ $value->productVariant->product->name }} #{{ $value->productVariant->variant }}
                            @endif
                        </td>
                        <td>
                            {{ number_format($value->price) }}
                        </td>
                        <td>
                            {{ $value->qty }}
                        </td>
                        <td>
                            0
                        </td>
                        <td>
                            {{ number_format($value->subtotal) }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tfoot>
                        <tr>
                            <td><strong>Shipping Cost</strong></td>
                            <td colspan="3">
                                {{ strtoupper($order->shipment_name) }}
                            </td>
                            <td>{{ number_format($order->shipping_cost) }}</td>
                        </tr>
                        <tr>
                            <td colspan="4"><strong>Discount</strong></td>
                            <td>{{ number_format($order->discount) }}</td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <h5><strong>Total</strong></h5>
                            </td>
                            <td>
                                <h5>{{ number_format($order->total_amount) }}</h5>
                            </td>
                        </tr>
                    </tfoot>
                </tfoot>
                @endif
            </table>
        </div>
    </div>
</div>

@php

$customer = $order->customer;

@endphp

@include('customers::customers.modal-edit',$customer)
@include('ecommerce::partials.modal-edit-shipping')
@include('ecommerce::partials.modal-edit-status')

@endsection