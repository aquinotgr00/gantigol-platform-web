@extends('preorder::layout')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="https://cdn.datatables.net/select/1.3.0/css/select.bootstrap4.min.css" rel="stylesheet">

@endpush

@push('scripts')
<script src="{{ asset('vendor/admin/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.select.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#dataTable').DataTable();
    });
</script>
@endpush

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="clearfix">
            <div class="float-left">
                @if($transaction->status == 'paid')
                <a class="btn btn-default btn-sm"
                    href="{{ route('paid.transaction',$transaction->pre_order_id) }}">Back</a>
                @else
                <a class="btn btn-default btn-sm"
                    href="{{ route('pending.transaction',$transaction->pre_order_id) }}">Back</a>
                @endif
                <strong>Details Invoice</strong>
            </div>
            <div class="float-right">

            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col">
                <h4>Shipping Information</h4>
                <div class="form-group">
                    <strong>Courier Name</strong>
                    <p>
                        {{ (isset($transaction->courier_name))? $transaction->courier_name : ''   }}
                    </p>
                </div>
                <div class="form-group">
                    <strong>Service Type</strong>
                    <p>
                        {{ (isset($transaction->courier_type))? $transaction->courier_type : ''   }}
                    </p>
                </div>
                <div class="form-group">
                    <strong>Courier Fee</strong>
                    <p>
                        {{ (isset($transaction->courier_fee))? $transaction->courier_fee : ''   }}
                    </p>
                </div>
            </div>
            <div class="col">
                <h4>Account Information</h4>
                <div class="form-group">
                    <strong>Customer Name</strong>
                    <p>
                        {{ (isset($transaction->name))? $transaction->name : ''   }}
                    </p>
                </div>
                <div class="form-group">
                    <strong>Customer Name</strong>
                    <p>
                        {{ (isset($transaction->name))? $transaction->name : ''   }}
                    </p>
                </div>
                <div class="form-group">
                    <strong>Email</strong>
                    <p>
                        {{ (isset($transaction->email))? $transaction->email : ''   }}
                    </p>
                </div>
                <div class="form-group">
                    <strong>Phone</strong>
                    <p>
                        {{ (isset($transaction->phone))? $transaction->phone : ''   }}
                    </p>
                </div>
                <div class="form-group">
                    <strong>Address</strong>
                    <p>
                        {{ (isset($transaction->address))? $transaction->address : ''   }}
                    </p>
                </div>
                <div class="form-group">
                    <strong>Postal Code</strong>
                    <p>
                        {{ (isset($transaction->postal_code))? $transaction->postal_code : ''   }}
                    </p>
                </div>
            </div>
            <div class="col">
                <h4>Order Information</h4>
                <div class="form-group">
                    <strong>Invoice ID</strong>
                    <h4>{{ (isset($transaction->invoice))? $transaction->invoice : ''   }}</h4>
                </div>
                <div class="form-group">
                    <strong>Order Product</strong>
                    <h5 class="text-primary">{{ $product->name }}</h5>
                </div>
                <div class="form-group">
                    <strong>Status Transaction</strong>
                    <p>
                        {{ (isset($transaction->status))? strtoupper($transaction->status) : ''   }}
                        @if($transaction->status == 'unpaid')
                        <strong class="text-danger">&nbsp;({{ $transaction->payment_reminder }}X Reminder)</strong>
                        @endif
                    </p>
                </div>
                <div class="form-group">
                    <strong>Order Amount</strong>
                    <p>
                        {{ (isset($transaction->amount))? 'Rp '.number_format($transaction->amount) : ''   }}
                    </p>
                </div>
                <div class="form-group">
                    <strong>Order Quantity</strong>
                    <p>
                        {{ (isset($transaction->quantity))? $transaction->quantity : ''   }}
                    </p>
                </div>
                <div class="form-group">
                    <strong>Notes</strong>
                    <p>
                        {{ (isset($transaction->note))? $transaction->note : ''   }}
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h4>List Order</h4>
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
    </div>
</div>

@endsection