@extends('admin::layout-nassau')

@section('content')
<div class="row pl-3">
    <form action="{{ route('product-categories.store') }}" method="post" class="col-md-6 col-lg7 pl-0">
        @csrf
        <div class="form-group">
            <label for="exampleInputCategoryName">Category Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputCategoryName" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Parent Category</label>
            <select name="parent_id" class="form-control">
                @if(isset($categories))
                <option value="">Choose one</option>
                @foreach($categories as $key => $category)
                @include('product::includes.productcategory-option', ['category'=>$category, 'parent'=>''])
                @endforeach
                @endif
            </select>
        </div>
        <input type="hidden" name="image_id" />
        <div class="float-right">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>

    <div id="dropzone" class="col-md-4 col-lg-5 pl-5 grs">
        <label for="exampleFormControlSelect1">Featured Image</label>
        <form class="dropzone needsclick dz-clickable" id="demo-upload" action="/upload">
            <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
        </form>
        <small><span>Image size must be 1920x600 with maximum file size</span>
            <span>400 kb</span></small>
    </div>

</div>
@endsection