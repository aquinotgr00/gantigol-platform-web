@extends('admin::layout-nassau')

@push('styles')
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

    #removeFeaturedImage {
        color: red;
        font-weight: bold;
    }
</style>
@endpush

@section('content')
<!-- start form -->
<div class="row pl-3">
    <form class="col-md-6 col-lg7 pl-0" action="{{ route('product-size-chart.update',$productSize->id) }}" method="post" enctype='multipart/form-data'>
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Size Chart Name</label>
            <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ $productSize->name }}" />
            @if ($errors->has('name'))
            <div class="invalid-feedback">{{ $errors->first('name') }}</div>
            @endif
        </div>
        <div id="tableDiv"></div>
        <div class="form-group">
            <label for="">Product Category</label>
            <select name="category_id" class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}">
                @if(isset($categories))
                <option value="">Choose one</option>
                @foreach($categories as $key => $category)
                @include('product::includes.productcategory-option', [
                'category' => $category,
                'parent' => '',
                'selected' => (isset($productSize->category))? $productSize->category : NULL
                ])
                @endforeach
                @endif
            </select>
            @if ($errors->has('category_id'))
            <div class="invalid-feedback">{{ $errors->first('category_id') }}</div>
            @endif
        </div>
        <div class="text-right">
            <input type="hidden" name="image_id" />
            <input type="hidden" name="image" value="{{ $productSize->image }}" />
            <button class="btn btn-success">
                <i class="fa fa-save"></i>&nbsp;
                Save
            </button>
        </div>
    </form>
    <div id="dropzone" class="col-md-4 col-lg-5 pl-5 grs">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Featusred Image</label>
            <br>

            @mediaPicker(['singleSelect'=>true, 'onSelect'=>'selectSizeChartImage'])
            <img src="{{ $productSize->image }}" id="img-placeholder" class="img-fluid img-thumbnail add-img-featured {{ $errors->has('image') ? 'is-invalid-img' : '' }}" />
            @if ($errors->has('image'))
            <p class="is-valid-image-feedback">{{ $errors->first('image') }}</p>
            @endif
            @endmediaPicker
            <small>
                <input type="hidden" id="img-plus" value="{{ asset('vendor/admin/images/image-plus.svg') }}" />
                <span><a href="#" id="removeFeaturedImage">Remove Image</a></span>
                <span>Image size must be 1920x600 with maximum file size</span>
                <span>400 kb</span>
            </small>
        </div>
    </div>

</div>
<!-- end form -->
@endsection

@push('scripts')
<script>
    function selectSizeChartImage(images) {
        const {
            id,
            url
        } = images[0]
        $('#img-placeholder').attr('src', url)
        $('input[name="image_id"]').val(id);
        $('input[name="image"]').val(url);
    }
    $(function() {

        $('#removeFeaturedImage').click(function(event) {
            var img_plus_src = $('#img-plus').val();
            $('#img-placeholder').attr('src', img_plus_src)
            $('#btn-delete').removeClass('optional')
        });
    });
</script>
@endpush