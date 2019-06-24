@extends('admin::layout-nassau')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet">
<style>
    .card-heading-content {
        margin-top: 8px;
    }

    .card-heading-content>.clearfix .float-left>h4 {
        font-family: Source Sans Pro;
        font-style: normal;
        font-weight: 600;
        font-size: 14px;
        line-height: 14px;
    }

    .card-transaction {
        height: 600px;
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
</style>
@endpush

@push('scripts')
<script src="{{ asset('vendor/admin/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();

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
            $('#shipping-province').text(data.city.province.name);
            $('#shipping-city').text(data.city.name);
            $('#shipping-zip_code').text(data.city.postal_code);
            $('#province').text(data.city.province.name);
            $('#city').text(data.city.name);
            $('#zip_code').text(data.city.postal_code);
        });
    });
</script>
@endpush

@section('content')

@if(isset($transaction->customer))

@php

$customer = $transaction->customer;

@endphp

@include('customers::customers.modal-edit',['customer' => $customer])

@endif

<div class="row">
    <div class="col-12 col-md-4">
        <div class="card card-default card-transaction">
            <div class="card-body">
                <div class="card-heading-content">
                    <div class="clearfix">
                        <div class="float-left">
                            <h4>Customer Info</h4>
                        </div>
                        <div class="float-right">
                            <a href="#EditCustomerInfo" data-toggle=modal>
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                        </div>
                    </div>
                    <hr>
                </div>

                <div>
                    <div class="form-group">
                        <label>Name</label>
                        <p>{{ $customer->name }}</p>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <p>{{ $customer->address }}</p>
                    </div>
                    <div class="form-group">
                        <label>Subdistrict</label>
                        @if(isset($customer->subdistrict))
                        <p>{{ $customer->subdistrict->name }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        @if(isset($customer->subdistrict->city))
                        <p>{{ $customer->subdistrict->city->name }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Province</label>
                        @if(isset($customer->subdistrict->city->province))
                        <p>{{ $customer->subdistrict->city->province->name }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Zip Code</label>
                        @if(isset($customer->subdistrict->city))
                        <p>{{ $customer->subdistrict->city->postal_code }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <p>{{ $customer->phone }}</p>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <p>{{ $customer->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="card card-default card-transaction">
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
                        <p>{{ $transaction->name }}</p>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <p>{{ $transaction->address }}</p>
                    </div>
                    <div class="form-group">
                        <label>Subdistrict</label>
                        <p>{{ $transaction->getSubdistrict->name }}</p>
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <p>{{ $transaction->getSubdistrict->city->name }}</p>
                    </div>
                    <div class="form-group">
                        <label>Province</label>
                        <p>{{ $transaction->getSubdistrict->city->province->name }}</p>
                    </div>
                    <div class="form-group">
                        <label>Zip Code</label>
                        <p>{{ $transaction->getSubdistrict->city->postal_code }}</p>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <p>{{ $transaction->phone }}</p>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <p>{{ $transaction->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="card card-default card-transaction">
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
                            <!--
                            <a href="#">
                                <i class="fas fa-shipping-fast"></i>
                            </a>
-->
                        </div>
                    </div>
                    <hr>
                </div>

                <div>
                    <div class="form-group">
                        <label>Order Status</label>
                        <p>{{ ucwords($transaction->status) }}</p>
                    </div>

                    <div class="form-group">
                        <label>Tracking Number</label>
                        @if(isset($transaction->getProduction->id))
                        <p>{{ $transaction->getProduction->tracking_number }}</p>
                        @else
                        <p> - </p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Notes</label>
                        <p>{{ $transaction->note }}</p>

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
                    <th>Qty</th>
                    <th>Discount</th>
                    <th>Subtotal</th>
                </thead>
                <tbody>
                    @foreach($orders as $key => $value)
                    <tr>
                        <td>
                            <img src="{{ $value->productVariant->product->image }}" height="50px;">
                            {{ $value->productVariant->product->name }} #{{ $value->productVariant->variant }}
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
                    <tr>
                        <td><strong>Shipping Cost</strong></td>
                        <td colspan="3">{{ $transaction->courier_name }}</td>
                        <td>{{ number_format($transaction->courier_fee) }}</td>
                    </tr>
                    <tr>
                        <td colspan="4"><strong>Discount</strong></td>
                        <td>{{ number_format($transaction->discount) }}</td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <h5><strong>Total</strong></h5>
                        </td>
                        <td>
                            <h5>{{ number_format($transaction->amount) }}</h5>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>


@include('preorder::partials.modal-edit-shipping')
@include('preorder::partials.modal-edit-status')

@endsection