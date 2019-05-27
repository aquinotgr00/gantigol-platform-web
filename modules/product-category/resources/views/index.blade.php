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
            <a class="btn btn-outline-primary btn-sm" href="{{ route('product-categories.create') }}">Add Category</a>
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="d-flex">
                        <th class="col-1">Image</th>
                        <th class="col-9">Category</th>
                        <th class="col-2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($categories as $category)
                    
                    <tr class="d-flex">
                        <td class="col-1">
                            @if($category->image)
                            <img src="{{$category->image->getUrl() }}" class="img-thumbnail">
                            @endif
                        </td>
                        <td class="col-9">{{$category->name}}</td>
                        <td class="col-2">
                            @smallRoundButton(['icon'=>'fa-pen','title'=>'Edit','route'=>route('product-categories.edit',['category'=>$category])])
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
	
</script>
@endpush