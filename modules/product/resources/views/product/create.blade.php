@extends('admin::layout-nassau')

@push('styles')
<link rel="stylesheet" href="{{ asset('vendor/product/css/tagsinput.css') }}">
@endpush

@section('content')
<!-- start form -->
<div class="row pl-3">
    <form id="form-add-product" class="col-md-6 col-lg7 pl-0" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputCategoryName">Product Title</label>
            <input type="text" name="name" class="form-control" id="exampleInputCategoryName">
        </div>
        <div class="form-group">
            <label for="productDescription">Description</label>
            <textarea type="text" name="description" class="form-control" id="productDescription" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Product Properties</label>
            <div class="row">
                <div class="col">
                    <div class="text-right">
                        <a class="btn sub-circle my-2 my-sm-0" href="#" role="button" id="AddVariant">
                            <img class="add-svg" src="{{ asset('vendor/admin/images/add.svg') }}" alt="add-image">
                        </a>
                    </div>
                    <table id="tableVariant" class="table">
                        <thead>
                            <tr>
                                <th>Size Code</th>
                                <th>SKU</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id="template" style="display:none;">
                                <td>
                                    <input type="text" class="form-control" name="size_code[]" />
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="sku[]" />
                                </td>
                                <td class="text-center">
                                    <a href="#" style="display:none;" data-id="0" onclick="removeVariant(this)">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputCategoryPrize">Prize</label>
            <input type="number" step="any" name="price" class="form-control" id="exampleInputCategoryPrize">
        </div>
        <div class="form-group">
            <label for="exampleInputCategoryPrize">Weight</label>
            <input type="number" step="any" name="weight" class="form-control" id="exampleInputCategoryPrize">
        </div>
        @if(isset($categories))
        <div class="form-group">
            <label for="exampleFormControlSelect1">Product Category</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Select Product Category</option>
                @foreach($categories as $key => $value)
                <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>
        </div>
        @endif
        <div class="d-flex flex-row-reverse">
            <input type="hidden" name="status" value="1" />
            <button type="submit" onclick="changeStatus(1)" class="btn btn-success ml-4" formaction="#">Publish</button>
            <button type="submit" onclick="changeStatus(0)" class="btn btn-outline-secondary" formaction="#">Save As Draft</button>
        </div>
    </form>

    <div id="dropzone" class="col-md-4 col-lg-5 pl-5 grs">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Featured Image</label>
            <form class="dropzone needsclick" id="demo-upload" action="{{ route('upload.image-product') }}">
            </form>
            <small><span>Image size must be 1920x600 with maximum file size</span>
                <span>400 kb</span></small>
        </div>
        <!--<div class="form-group">
            <label for="exampleFormControlSelect1">Aditional Image</label>
            <form class="dropzone dropzone-secondary needsclick" id="demo-upload"
                action="{{ route('upload.image-product') }}">
            </form>
            <small><span>Image size must be 1920x600 with maximum file size</span>
                <span>400 kb</span></small>
        </div>-->

    </div>
</div>

<!-- end form -->
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script
    src="{{ asset('vendor/product/vendor/tinymce/tinymce.min.js?apiKey=jv18ld1zfu6vffpxf0ofb72orrp8ulyveyyepintrvlwdarp') }}">
    </script>
<script src="{{ asset('vendor/product/js/tagsinput.js') }}"></script>
<script>
    function removeVariant(obj) {
        var row_number = $(obj).data('id');
        var row_id = parseInt(row_number) - 1;
        $('#row' + row_id).remove();
    }

    function changeStatus(data) {
        $('input[name="status"]').val(data);
    }

    $(function () {

        tinymce.init({
            selector: '#productDescription'
        });
        $('#form-add-product').on('keyup keypress', function (e) {
            var keyCode = e.keyCode || e.which;
            if (keyCode === 13) {
                e.preventDefault();
                return false;
            }
        });

        $('#form-add-product').submit(function (event) {
            
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: formData,
                contentType: false,
                processData: false,
                success: function (data) {
                    if (data.id > 0) {
                        alert('Success');
                        window.location.href="{{ route('product.index') }}";
                    }
                }
            });
            return false;
        });

        var row = 1;
        $('#AddVariant').click(function (e) {
            e.preventDefault();
            var template = $('#template')
                .clone()                        // CLONE THE TEMPLATE
                .attr('id', 'row' + (row++))    // MAKE THE ID UNIQUE
                .appendTo($('#tableVariant tbody'))  // APPEND TO THE TABLE
                .show();                        // SHOW IT

            template.find('td:last-child').find('a').data('id', row);
            template.find('td:last-child').find('a').css('display', 'block');
        });
    });
</script>
@endpush