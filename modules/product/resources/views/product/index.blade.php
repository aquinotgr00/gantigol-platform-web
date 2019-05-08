@extends('admin::layout')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('vendor/admin/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.bootstrap4.min.js') }}"></script>
@endpush

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            <a class="btn btn-outline-primary btn-sm" href="{{ route('product.create') }}">Add Product</a>
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <h3>Product Items</h3>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
	
</script>
@endpush