@extends('admin::layout-nassau')

@section('content')
<!-- start form -->
<div class="row pl-3">
    <form class="col-md-6 col-lg7 pl-0" action="{{ route('product-size-chart.store') }}"
        method="post" enctype='multipart/form-data'>
        @csrf
        <div class="form-group">
            <label for="">Size Chart Name</label>
            <input type="text" name="name" class="form-control" />
        </div>
        <div id="tableDiv"></div>
        <div class="form-group">
            <label for="">Product Category</label>
            <select name="category_id" class="form-control">
                @if(isset($productCategory))
                <option value="0">Choose one</option>
                @foreach($productCategory as $key => $value)
                <option value="{{ $value->id }}">{{ $value->name }}</option>
                @endforeach

                @endif
            </select>
        </div>
        <div class="text-right">
            <button class="btn btn-success">
                <i class="fa fa-save"></i>&nbsp;
                Save
            </button>
        </div>
    </form>
    <div id="dropzone" class="col-md-4 col-lg-5 pl-5 grs">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Featured Image</label>
            <form class="dropzone needsclick" id="demo-upload" action="{{ route('upload.image-product') }}">
            </form>
            <small>
                <span>Image size must be 1920x600 with maximum file size</span>
                <span>400 kb</span>
            </small>
        </div>
    </div>

</div>
<!-- end form -->
@endsection
