@extends('admin::layout-nassau')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/admin/css/style.datatables.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/admin/css/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('vendor/admin/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/buttons.colVis.min.js') }}"></script>
@endpush

@section('content')
<header id="nav-top" class="pt-4">
    <nav class="navbar navbar-light justify-content-between ">
        <div class="row pl-3">
            <a href="{{ route('list-preorder.index') }}" class="btn btn-table circle-table back-head" title="back"></a>
            <h1>{{ (isset($preOrder->product->name))? $preOrder->product->name : '' }}</h1>
        </div>
        <div class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                {{ ucwords(Auth::user()->name) }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Setting</a>
                <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                    Logout
                </a>
            </div>
        </div>
    </nav>
    <div>
        <ul class="nav nav-tabs mt-4 mb-4">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#pending-pre">Pending</a>
            </li>
            <li class="vr"></li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#paid-pre">Paid</a>
            </li>
            <li class="vr"></li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#batch-pre">Batch</a>
            </li>

        </ul>
    </div>
</header>
<!-- end header -->
<div class="tab-content">
    <!-- start tab-pending -->
    <!-- start tools -->
    @include('preorder::transaction.pending',['preOrder'=> $preOrder])
    <!-- end tab-pending -->

    <!-- start tab-paid -->
    <!-- start tools -->
    @include('preorder::transaction.paid',['preOrder'=> $preOrder])
    <!-- end tab-paid -->

    <!-- start tab-batch-->
    <!-- start tools -->
    @include('preorder::transaction.batch',['preOrder'=> $preOrder])
    <!-- end tab-batch -->


</div>
@endsection