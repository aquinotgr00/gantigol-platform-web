@extends('admin::layout-nassau')

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
<style>
    #media-picker img {
        height: 10rem;
        width: 100%;
        object-fit: contain;
    }
    
    #media-picker .delete {
        color: red;
        display: none;
        bottom:0;
        right:0;
        padding:1rem;
    }
    
    #media-picker:hover .delete.optional {
        display: block;
    }
</style>
@endpush

@section('content')
<form method="post" action="{{ route('product-categories.update',$category) }}">
    @csrf
    
    @if($category->id)
    @method('PUT')
    <input type="hidden" name="id" value="{{$category->id}}" />
    @endif
    
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-2">
                    <div id="media-picker">
                        <a href="#" data-toggle="modal" data-target="#media-library-modal" data-single-upload="true" data-on-select="updateCategoryImage">
                            <img data-default-image="{{asset('vendor/media/img/placeholder.png')}}" src="{{ $category->image_id?$category->image->getUrl():asset('vendor/media/img/placeholder.png') }}" class="img-thumbnail" id="product-category-image" />
                        </a>
                        <a href="#" id="btn-delete" class="position-absolute delete">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
                <input type="hidden" id="product-category-image-id" name="image_id" value="{{$category->image_id}}" />
            </div>
            
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" value="{{ old('name') ?? $category->name}}" autofocus>
                    @if ($errors->has('name'))
                    <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Parent category</label>
                <div class="col-sm-10">
                    <select name="parent_id" class="form-control{{ $errors->has('parent_id') ? ' is-invalid' : '' }} selectpicker">
                        <option></option>
                        
                        <option>lorem</option>
                        <option>ipsum</option>
                        <option>dolor</option>
                        <option>sit amet</option>
                    </select>
                    @if ($errors->has('parent_id'))
                    <div class="invalid-feedback">{{ $errors->first('parent_id') }}</div>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            
        </div>
    </div>
    
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>

@endsection

@mediaLibraryModal

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>
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