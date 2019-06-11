@extends('admin::layout-nassau')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="{{ asset('vendor/admin/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.bootstrap4.min.js') }}"></script>
@endpush

@section('content')

<!-- start tools -->
<div>
    <tool class="navbar navbar-expand-lg">
        <form class="form-inline my-2 my-lg-0">
            <div class="input-group srch">
                <input type="text" class="form-control search-box" placeholder="Search">
                <div class="input-group-append">
                    <button class="btn btn-search" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
            <a class="btn sub-circle my-2 my-sm-0" href="{{ route('adjustment.create') }}" role="button">
                <img class="add-svg" src="{{ asset('vendor/admin/images/add.svg') }}" alt="add-image">
            </a>
        </form>
    </tool>
</div>
<!-- end tools -->
<hr>
@if ($message = Session::get('successMessage'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('errorMessage'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

<div class="table-responsive">
    <div id="dataTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">

        <div class="row">

            <table class="table table-bordered" id="dataTable" role="grid" aria-describedby="dataTable_info"
                style="width: 100%;">
                <thead>
                    <tr role="row">
                        <th class="col-sm-3">Product Name</th>
                        <th class="col-sm-2">Method</th>
                        <th class="col-sm-1">Stock</th>
                        <th class="col-sm-1">Users</th>
                        <th class="col-sm-3">Note</th>
                        <th class="col-sm-2">Date</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($getAdjusment as $i => $row)
                    <tr>
                        <td>{{ $row->productVariant->product->name }} - {{ $row->productVariant->variant }} -
                            {{ $row->productVariant->sku }}</td>
                        <td>{{ array_keys(config('inventory.adjustment.type','inventory'))[$row->type] }}</td>
                        <td>{{ $row->method.' '.$row->qty }}</td>
                        <td>{{ (is_null($row->users))? '' : $row->users->name }}</td>
                        <td>{{ $row->note }}</td>
                        <td>{{ date("d/m/Y H.i A", strtotime($row->created_at)) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection

@push('scripts')
<script></script>
@endpush