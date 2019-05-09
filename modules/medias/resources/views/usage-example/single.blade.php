@extends('admin::layout')

@section('content')
<form method="post" action="">
    @csrf
    
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-2">
                    @mediaPicker(['value'=>null, 'single'=>true, 'loadModal'=>false])
                </div>
            </div>
            <div class="form-group row">
                <label for="product-category-image-id" class="col-sm-2 col-form-label">Image URL</label>
                <div class="col-sm-10">
                    <input type="text" id="product-category-image-id" class="form-control" name="image" value="" disabled />
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@mediaLibraryModal