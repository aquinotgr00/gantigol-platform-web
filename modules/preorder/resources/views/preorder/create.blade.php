@extends('admin::layout-nassau')

@push('styles')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endpush

@push('scripts')

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ asset('vendor/preorder/js/preorder.add-variant.js') }}"></script>
<script>
    function preview_image() {
        var total_file = document.getElementById("images").files.length;
        for (var i = 0; i < total_file; i++) {
            $('#image_preview').append("<img src='" + URL.createObjectURL(event.currentTarget.files[i]) + "' class='col-md-2'>");
        }
    }

    function removeVariant(obj) {
        var row_number = $(obj).data('id');
        var row_id = parseInt(row_number) - 1;
        $('#row' + row_id).remove();
    }
    $(document).ready(function () {
        const btnDraftProduct = $('#btn-draft-product');

        $("#tags").autocomplete({
            source: function (request, response) {
                $.ajax({
                    url: "{{ url('api-product/items') }}",
                    dataType: "json",
                    data: {
                        status: 'closed'
                    },
                    success: function (data) {
                        response(data);
                    }
                });
            },
            minLength: 2,
            select: function (event, ui) {
                $('input[name="product_id"]').val(ui.item.id);
                $('textarea[name="description"]').val(ui.item.description);
                $('input[name="price"]').val(ui.item.price);
                $('input[name="weight"]').val(ui.item.weight);
            }
        });

        btnDraftProduct.on('click', function () {
            $('input[name="status"]').val(1);
            $('form').submit();
        });

        $('form').submit(function (event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: formData,
                contentType: false,
                processData: false,
                success: function (data) {
                    if (typeof data.data.product_id === 'undefined') {
                        alert('Error! product failed to save');
                    } else {
                        alert('Success! product saved');
                        window.location.href = "{{ route('list-preorder.index') }}";
                    }
                }
            });
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

@section('content')
<!-- start form -->
<div class="row pl-3">
    <form class="col-md-6 col-lg7 pl-0">
        <div class="form-group">
            <label for="exampleInputCategoryName">Product Title</label>
            <input type="text" class="form-control" id="exampleInputCategoryName">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Product Properties</label>
            <div class="form-row inline-form">
                <div class="col-md-5 mr-3">
                    <label for="exampleInputCategoryAttribute">Attribute</label>
                    <input type="text" class="form-control" id="exampleInputCategoryAttribute">
                </div>
                <div class="col-md-5 mr-3">
                    <label for="exampleInputCategoryValue">Value</label>
                    <input type="text" class="form-control" id="exampleInputCategoryValue">
                </div>
                <div class="col-md-1 pt-1">
                    <label for="exampleAddNewProperties"></label>
                    <a class="btn sub-circle my-2 my-sm-0" href="#" role="button">
                        <img class="add-svg" src="{{ asset('vendor/admin/images/add.svg') }}" alt="add-image">
                    </a>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputCategoryPrize">Prize</label>
            <input type="text" class="form-control" id="exampleInputCategoryPrize">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Product Category</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Select Product Category</option>
                <option>Men</option>
                <option>Women</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputCategorySKU">SKU</label>
            <input type="text" class="form-control" id="exampleInputCategorySKU">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Keywords</label>
            <textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            <small>separate with commas</small>
        </div>
        <div class="form-group">
            <label for="exampleInputCategoryRelatedTag">Related Tag</label>
            <input type="text" class="form-control" id="exampleInputCategoryRelatedTag">
            <small>separate with commas</small>
        </div>
        <div class="float-right">
            <button type="submit" class="btn btn-outline-secondary" formaction="#">Save As Draft</button>
            <button type="submit" class="btn btn-success ml-4" formaction="#">Publish</button>
        </div>
    </form>

    <div id="dropzone" class="col-md-4 col-lg-5 pl-5 grs">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Featured Image</label>
            <form class="dropzone needsclick" id="demo-upload" action="/upload">
            </form>
            <small><span>Image size must be 1920x600 with maximum file size</span>
                <span>400 kb</span></small>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Aditional Image</label>
            <form class="dropzone dropzone-secondary needsclick" id="demo-upload" action="/upload">
            </form>
            <small><span>Image size must be 1920x600 with maximum file size</span>
                <span>400 kb</span></small>
        </div>
    </div>

</div>

<!-- end form -->
@endsection