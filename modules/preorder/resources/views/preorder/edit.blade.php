@extends('admin::layout-nassau')

@push('styles')
<link rel="stylesheet" href="{{ asset('vendor/product/css/tagsinput.css') }}">
<style>
    .is-invalid-img {
        border: 2px solid #dc3545 !important;
    }

    .is-valid-image-feedback {
        font-size: 80%;
        color: #dc3545;
    }

    .add-img-featured {
        padding: 10px;
    }

    .img-thumbnail {
        object-fit: scale-down;
    }
</style>
@endpush

@section('content')

<!-- start form -->
<form action="{{ route('list-preorder.update',$preOrder->id) }}" method="post" id="form-add-product">
    <div class="row">
        <div class="col-6">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="inputName">Product Title</label>
                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ $product->name }}" />
                @if ($errors->has('name'))
                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="productDescription">Description</label>
                <textarea type="text" name="description" class="form-control" id="productDescription" rows="3">{{ $product->description }}</textarea>
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="number" name="price" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" value="{{ $price_preorder }}" />
                @if ($errors->has('price'))
                <div class="invalid-feedback">{{ $errors->first('price') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="weight">Weight (gr)</label>
                <input type="number" step="any" name="weight" class="form-control{{ $errors->has('weight') ? ' is-invalid' : '' }}" id="weight" value="{{ $product->weight }}" />
                @if ($errors->has('weight'))
                <div class="invalid-feedback">{{ $errors->first('weight') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="selectCategory">Product Category</label>
                <select class="form-control {{ $errors->has('category_id') ? ' is-invalid' : '' }}" id="selectCategory" name="category_id">
                    <option value="">Select Product Category</option>
                    @if(isset($categories) && ($categories))
                    @foreach ($categories->all() as $category)
                    @include('product::includes.productcategory-option', ['category'=>$category, 'parent'=>''])
                    @endforeach
                    @endif
                </select>
                @if ($errors->has('category_id'))
                <div class="invalid-feedback">{{ $errors->first('category_id') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="inputQuota">Quota</label>
                <input type="number" class="form-control" name="quota" id="inputQuota" value="{{ $preOrder->quota }}" />
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="inputStartDate">Start Date</label>
                        @php
                        $start_date = date('Y-m-d', strtotime($preOrder->start_date));
                        @endphp
                        <input type="date" class="form-control" name="start_date" id="inputStartDate" value="{{ $start_date }}" />
                    </div>
                </div>
                <div class="col">

                    <div class="form-group">
                        <label for="inputEndDate">End Date</label>
                        @php
                        $end_date = date('Y-m-d', strtotime($preOrder->end_date));
                        @endphp
                        <input type="date" class="form-control" name="end_date" id="inputEndDate" value="{{ $end_date }}" />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="InputCategoryRelatedTag">Related Tag</label>
                <input type="text" name="tags" data-role="tagsinput" class="form-control" id="InputCategoryRelatedTag" value="{{ $related_tags }}">
                <small>separate with commas</small>
            </div>
            <div class="float-right">
                <input type="hidden" name="status">
                <input type="hidden" name="image" />
                <button type="submit" onclick="changeStatus(0)" class="btn btn-outline-secondary">Save As Draft</button>
                <button type="submit" onclick="changeStatus(1)" class="btn btn-success ml-4">Publish</button>
            </div>
        </div>
        <div class="col-4 grs">
            <div class="mb-4">
                <label for="exampleFormControlSelect1">Featured Image</label>
                <div class="mb-2">
                    <a href="#" data-toggle="modal" data-target="#media-library-modal" data-multi-select="false" data-on-select="selectFeatureImage">
                        @php

                        $img_url = asset('vendor/admin/images/image-plus.svg');
                        if(strlen($product->image) > 10){
                        $img_url = $product->image;
                        }

                        @endphp
                        <img src="{{ $img_url }}" id="img-placeholder" class="img-fluid img-thumbnail add-img-featured {{ $errors->has('image') ? 'is-invalid-img' : '' }}" />
                        @if ($errors->has('image'))
                        <p class="is-valid-image-feedback">{{ $errors->first('image') }}</p>
                        @endif
                    </a>
                </div>
                <small>
                    <span><a href="#" id="removeFeaturedImage">Remove Image</a></span>
                    <span>Image size must be 1920x600 with maximum file size</span>
                    <span>400 kb</span>
                </small>
            </div>

            <div>
                <label for="exampleFormControlSelect1">Aditional Image</label>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-2">
                            <a href="#" data-toggle="modal" data-target="#media-library-modal" data-multi-select="true" data-on-select="selectAddtionalImage">
                                <img src="{{ asset('vendor/admin/images/image-plus.svg') }}" id="product-category-image" class="img-fluid img-thumbnail add-img-featured" />
                            </a>
                        </div>
                    </div>
                    <div class="addtional-images"></div>
                    <input type="hidden" name="addtional_images_selected" />
                    @if(isset($product->images))
                    @foreach($product->images as $index => $image)
                    <input type="hidden" name="images[]" value="{{ $image->image }}" id="input-img-{{ $image->id }}" />
                    <div class="mb-2 hovereffect float-left">
                        <img class="img-fluid img-thumbnail img-additional-size" src="{{ $image->image }}" id="img-{{ $image->id }}">
                        <div class="overlay-additional btn-img">
                            <span>
                                <a href="#" class="btn btn-table circle-table edit-table mr-2 btn-edit-img" data-toggle="modal" data-target="#media-library-modal" data-id="{{ $image->id }}" data-multi-select="false" data-on-select="editAddtionalImage" title="Edit this image"></a>
                            </span>
                            <span>
                                <a href="{{ route('product.delete-image',$image->id) }}" class="btn btn-table circle-table delete-table btn-delete-image" data-toggle="tooltip" data-placement="top" title="Remove this image"></a>
                            </span>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                <small><span>Image size must be 1920x600 with maximum file size</span>
                    <span>400 kb</span></small>
                <input type="hidden" id="img-plus" value="{{ asset('vendor/admin/images/image-plus.svg') }}" />
            </div>
        </div>
    </div>
</form>
<!-- end form -->


@endsection

@mediaLibraryModal

@push('scripts')
<script src="{{ asset('vendor/product/vendor/tinymce/tinymce.min.js?apiKey=jv18ld1zfu6vffpxf0ofb72orrp8ulyveyyepintrvlwdarp') }}">
</script>
<script src="{{ asset('vendor/product/js/tagsinput.js') }}"></script>
<script src="{{ asset('vendor/admin/js/zInput.js') }}"></script>
<script>
    function changeStatus(data) {
        $('input[name="status"]').val(data);
    }


    function selectFeatureImage(images) {
        const {
            id,
            url
        } = images[0]
        $('#img-placeholder').attr('src', url)
        $('input[name="image"]').val(url);
    }

    function selectAddtionalImage(images) {
        var html = '';
        $.each(images, function(key, value) {
            html += templateAddtionalImage(value.url);
        });
        $('.addtional-images').html(html);
    }

    function templateAddtionalImage(url) {
        var template = '<input type="hidden" name="images[]" value="' + url + '" />';
        template += '<div class="mb-2 hovereffect float-left">';
        template += '<img class="img-fluid img-thumbnail img-additional-size" src="' + url + '" alt="">';
        template += '<div class="overlay-additional btn-img">';
        template += '<span>';
        template += '<a href="#" class="btn btn-table circle-table edit-table mr-2"';
        template += 'data-toggle="tooltip"';
        template += 'data-placement="top"';
        template += 'title="" data-original-title="View"></a>';
        template += '</span>';
        template += '<span data-toggle=modal role="button" data-target="#ModalMediaLibrary">';
        template += '<a href="#"';
        template += 'class="btn btn-table circle-table delete-table"';
        template += 'data-toggle="tooltip"';
        template += 'data-placement="top"';
        template += 'title="" data-original-title="Edit"></a>';
        template += '</span>';
        template += '</div>';
        template += '</div>';
        return template;
    }

    function editAddtionalImage(images) {

        const {
            id,
            url
        } = images[0]
        var obj_id = $('input[name="addtional_images_selected"]').val();
        $('#img-' + obj_id).attr('src', url);
        $('#input-img-' + obj_id).val(url);
    }

    $(function() {

        tinymce.init({
            selector: '#productDescription'
        });

        $('#removeFeaturedImage').click(function(event) {
            var img_plus_src = $('#img-plus').val();
            $('#img-placeholder').attr('src', img_plus_src)
            $('#btn-delete').removeClass('optional')
        });
    });
</script>
@endpush