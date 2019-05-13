@extends('admin::layout')

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
<link rel="stylesheet" href="{{ asset('vendor/product-category/css/product-category.css') }}">
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
                    @mediaPicker(['value'=>$category->image, 'single'=>true, 'loadModal'=>false])
                </div>
                <input type="hidden" id="product-category-image-id" name="image" value="{{$category->image}}" />
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Images</label>
                <div class="col-sm-2">
                    @mediaPicker(['values'=>[], 'loadModal'=>false])
                </div>
                <input type="hidden" name="image[]" value="{{$category->image_id}}" />
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
<script src="{{ asset('vendor/product-category/js/product-category.js') }}"></script>
@endpush