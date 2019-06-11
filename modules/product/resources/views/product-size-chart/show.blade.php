@extends('admin::layout-nassau')

@section('content')
<!-- start form -->
<div class="row pl-3">
    <form class="col-md-6 col-lg7 pl-0" >
        @csrf
        <div class="form-group">
            <label for="">Size Chart Name</label>
            <h4>{{  $productSize->name }}</h4>
        </div>
        <div id="tableDiv"></div>
        <div class="form-group">
            <label >Product Category</label>
            <p>
            @if(isset($categories) && ($categories))
                @foreach ($categories->all() as $category)

                @include('product::includes.productcategory-row', [
                'category'=>$category,
                'parent'=>'',
                'category_id'=> $productSize->category_id
                ])

                @endforeach
                @endif
            </p>
        </div>
        <div class="text-right">
            <a href="{{ route('product-size-chart.edit',$productSize->id) }}" class="btn btn-success">
                <i class="fa fa-primary"></i>&nbsp;
                Edit
            </a>
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
