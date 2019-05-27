@extends('admin::layout-nassau')

@push('styles')
<link href="{{ asset('vendor/admin/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('vendor/admin/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/admin/js/datatables/dataTables.bootstrap4.min.js') }}"></script>
@endpush

@section('content')

<!-- start tools -->
<div>
    <tool class="navbar navbar-expand-lg">
        <form class="form-inline my-2 my-lg-0">
            <div class="input-group srch">
                <input type="search" id="search" class="form-control search-box" placeholder="Search">
                <div class="input-group-append">
                    <button class="btn btn-search" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
            @can('create-preorder')
            <a class="btn sub-circle my-2 my-sm-0" href="{{ route('product-categories.create') }}" role="button">
                <img class="add-svg" src="{{ asset('vendor/admin/images/add.svg') }}" alt="add-image">
            </a>
            @endcan
        </form>
    </tool>
</div>
<!-- end tools -->
<hr />
<!-- start table -->
<div class="table-responsive">
    <table class="table" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
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
<!-- end table -->

@endsection

@push('scripts')
<script>

</script>
@endpush