@extends('admin::layout-nassau')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/admin/css/style.datatables.css') }}" rel="stylesheet">
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
        height: 406px;
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
                        <label>Zip Code</label>
                        <p>{{ $customer->zip_code }}</p>
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
                        <label>Zip Code</label>
                        <p>{{ $transaction->postal_code }}</p>
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
                    <th>No</th>
                    <th>Item</th>
                    <th>Size</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Subtotal</th>
                </thead>
                <tbody>
                    @foreach($orders as $key => $value)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>
                            {{ strtoupper($value->model) }}
                        </td>
                        <td>
                            {{ strtoupper($value->size) }}
                        </td>
                        <td>
                            {{ $value->qty }}
                        </td>
                        <td>
                            {{ number_format($value->price) }}
                        </td>
                        <td>
                            {{ number_format($value->subtotal) }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@include('preorder::partials.modal-edit-shipping')
@include('preorder::partials.modal-edit-status')

@endsection