@extends('admin::layout-nassau')

@push('styles')
<link rel="stylesheet" href="{{ asset('vendor/product/css/tagsinput.css') }}">
@endpush

@section('content')

<!-- start form -->
<div class="row">
    <form action="{{ route('list-preorder.update',$preOrder->id) }}" method="post" class="col-6" id="form-add-product">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputCategoryName">Product Title</label>
            <p>{{ $product->name }}</p>
        </div>
        <div class="form-group">
            <label for="productDescription">Description</label>
            <textarea type="text" name="description" class="form-control" id="productDescription"
                rows="3">{{ $product->description }}</textarea>
        </div>
        <div class="form-group">
            <label>Category</label>
            <p>
                @if(isset($categories) && ($categories))
                @foreach ($categories->all() as $category)

                @include('product::includes.productcategory-row', ['category'=>$category, 'parent'=>'','category_id'=>
                $product->category_id ])

                @endforeach
                @endif
            </p>
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
                    <input type="date" class="form-control" name="start_date" id="inputStartDate" value="{{ $start_date }}"/>
                </div>
            </div>
            <div class="col">

                <div class="form-group">
                    <label for="inputEndDate">End Date</label>
                    @php
                    $end_date = date('Y-m-d', strtotime($preOrder->end_date));
                    @endphp
                    <input type="date" class="form-control" name="end_date" id="inputEndDate"  value="{{ $end_date }}"/>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="InputCategoryRelatedTag">Related Tag</label>
            <input type="text" name="tags" data-role="tagsinput" class="form-control" id="InputCategoryRelatedTag"
                value="{{ $related_tags }}">
            <small>separate with commas</small>
        </div>
        <div class="float-right">
            <input type="hidden" name="status">
            <button type="submit" onclick="changeStatus(0)" class="btn btn-outline-secondary">Save As Draft</button>
            <button type="submit" onclick="changeStatus(1)" class="btn btn-success ml-4">Publish</button>
        </div>
    </form>
    <div class="col-4 grs">
        <div class="mb-4">
            <label for="exampleFormControlSelect1">Featured Image</label>
            <div class="mb-2">
                <a href="#" data-toggle=modal role="button" data-target="#ModalMediaLibrary">
                    <img class="img-fluid img-thumbnail add-img-featured"
                        src="{{ url('vendor/admin/images/image-plus.svg') }}" alt="">
                </a>
            </div>
            <small><span>Image size must be 1920x600 with maximum file size</span>
                <span>400 kb</span></small>
        </div>

        <div>
            <label for="exampleFormControlSelect1">Aditional Image</label>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-2">
                        <a href="#" data-toggle=modal role="button" data-target="#ModalMediaLibrary">
                            <img class="img-fluid img-thumbnail add-img-additional"
                                src="{{ url('vendor/admin/images/image-plus-small.svg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-2 hovereffect">
                        <img class="img-fluid img-thumbnail img-additional-size"
                            src="https://source.unsplash.com/pWkk7iiCoDM/400x300" alt="">
                        <div class="overlay-additional btn-img">
                            <span>
                                <a href="#" class="btn btn-table circle-table view-img mr-2" data-toggle="tooltip"
                                    data-placement="top" title="" data-original-title="View"></a>
                            </span>
                            <span data-toggle=modal role="button" data-target="#ModalMediaLibrary">
                                <a href="#" class="btn btn-table circle-table edit-table" data-toggle="tooltip"
                                    data-placement="top" title="" data-original-title="Edit"></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <small><span>Image size must be 1920x600 with maximum file size</span>
                <span>400 kb</span></small>

        </div>
    </div>
</div>
<!-- end form -->

<!-- start modal-->

@include('product::includes.modal-media')

<!-- end modal -->


@endsection

@push('scripts')
<script
    src="{{ asset('vendor/product/vendor/tinymce/tinymce.min.js?apiKey=jv18ld1zfu6vffpxf0ofb72orrp8ulyveyyepintrvlwdarp') }}">
    </script>
<script src="{{ asset('vendor/product/js/tagsinput.js') }}"></script>
<script src="{{ asset('vendor/admin/js/zInput.js') }}"></script>
<script>
    function changeStatus(data) {
        $('input[name="status"]').val(data);
    }

    $(function () {

        tinymce.init({
            selector: '#productDescription'
        });

    });
</script>
@endpush