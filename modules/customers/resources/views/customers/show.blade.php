@extends('admin::layout-nassau')

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
                    <button class="btn btn-edit-frm pull-right" data-toggle="tooltip" data-placement="top" title=""
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
            <label>Zip Code</label>
            <p>{{ $customer->zip_code }}</p>
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

    <div class="col-sm grs">
        <div>
            <label>Order History</label>
        </div>
        <hr class="mt-0">
        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter Activity
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Add Stock</a>
            <a class="dropdown-item" href="#">Reduce Stock</a>
            <a class="dropdown-item" href="#">Change Description</a>
            <a class="dropdown-item" href="#">Change Image</a>
        </div>
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
                        <tr>
                            <th>18-03-2019
                                <br /><small>20:28:00</small></th>
                            <td>INV-2019-08-03-00001</td>
                            <td>Paid</td>
                        </tr>
                        <tr>
                            <th>18-03-2019
                                <br /><small>20:28:00</small></th>
                            <td>INV-2019-08-03-00001</td>
                            <td>Complete</td>
                        </tr>
                        <tr>
                            <th>18-03-2019
                                <br /><small>20:28:00</small></th>
                            <td>INV-2019-08-03-00001</td>
                            <td>Complete</td>
                        </tr>
                        <tr>
                            <th>18-03-2019
                                <br /><small>20:28:00</small></th>
                            <td>INV-2019-08-03-00001</td>
                            <td>Paid</td>
                        </tr>
                        <tr>
                            <th>18-03-2019
                                <br /><small>20:28:00</small></th>
                            <td>INV-2019-08-03-00001</td>
                            <td>Complete</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


    </div>

</div>
<!-- end info -->

@include('customers::customers.modal-edit');
@endsection