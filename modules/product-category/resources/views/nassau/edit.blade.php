@extends('admin::layout-nassau')

@push('pre-core-style')
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/admin/css/dropzone.min.css') }}">
@endpush

@push('styles')
<style>
    .add-img-featured {
        padding: 10px;
    }
    .img-thumbnail {
        object-fit: scale-down;
    }
</style>
@endpush

@section('content')
@pageHeader(['title'=>'Add New Product Categories', 'back'=>route('product-categories.index')])

<div class="row pl-3">
    <form class="col-md-6 col-lg7 pl-0" method="post" action="{{ route('product-categories.update',$category) }}">
        @csrf
    
        @if($category->id)
        @method('PUT')
        <input type="hidden" name="id" value="{{$category->id}}" />
        @endif
        
        <input type="hidden" id="product-category-image-id" name="image_id" value="{{$category->image_id}}" />
        
        <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" value="{{ old('name') ?? $category->name}}" autofocus>
            @if ($errors->has('name'))
            <div class="invalid-feedback">{{ $errors->first('name') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="parent-category">Parent Category</label>
            <select name="parent_id" class="form-control" id="parent-category">
                @if(isset($categories))
                <option value="">Choose one</option>
                @foreach($categories as $key => $category)
                @include('product::includes.productcategory-option', ['category'=>$category, 'parent'=>''])
                @endforeach
                @endif
            </select>
        </div>
        <div class="float-right">
            <button type="submit" class="btn btn-success" formaction="#">Submit</button>
        </div>
    </form>

    <div class="col-md-4 col-lg-5 pl-5 grs">
        <div class="mb-4">
            <label>Featured Image</label>
            <div class="mb-2">
                @mediaPicker(['singleSelect'=>true, 'onSelect'=>'updateCategoryImage'])
                    <img src="{{ $category->image_id?$category->image->getUrl():asset('vendor/admin/images/image-plus.svg') }}" id="product-category-image" class="img-fluid img-thumbnail add-img-featured" />
                @endmediaPicker
            </div>
            <small>
                <span>Image size must be 1920x600 with maximum file size</span>
                <span>400 kb</span>
            </small>
        </div>
        
    </div>

</div>
@endsection

@push('scripts')
<script>
	function updateCategoryImage(selectedMedia) {
        const {id,url} = selectedMedia[0]
        
        $('#product-category-image-id').val(id)
        $('#product-category-image').attr('src',url)
        $('#btn-delete').addClass('optional')
        
    }
    
    $('#media-picker .delete').click(function(event) {
        event.preventDefault()
        $('#product-category-image-id').val(null)
        $('#product-category-image').attr('src',$('#product-category-image').data('defaultImage'))
        $('#btn-delete').removeClass('optional')
    });
</script>
@endpush
