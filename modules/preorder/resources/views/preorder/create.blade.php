@extends('admin::layout-nassau')

@push('styles')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endpush

@push('scripts')

<script>
    function preview_image() {
        var total_file = document.getElementById("images").files.length;
        for (var i = 0; i < total_file; i++) {
            $('#image_preview').append("<img src='" + URL.createObjectURL(event.currentTarget.files[i]) + "' class='col-md-2'>");
        }
    }

    $(document).ready(function () {
        const btnDraftProduct = $('#btn-draft-product');

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

    });
</script>
@endpush

@section('content')

<form action="{{ route('preorder.store') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Product Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="number" name="price" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Product Category</label>
                <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                    <option value="0">Select Product Category</option>
                    @if(isset($categories))

                    @foreach ($categories->all() as $category)
                    @include('product::includes.productcategory-option', ['category'=>$category, 'parent'=>''])
                    @endforeach
                    @endif
                </select>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="selectProductType">Product Type</label>
                <select class="form-control" id="selectProductType">
                    <option value="0">Choose One</option>
                    <option value="variant">
                        Variant Product
                    </option>
                    <option value="simple">
                        Simple Product
                    </option>
                </select>
            </div>

            <div id="view-product-type"></div>

            <button type="button" id="btn-generate-variant" hidden></button>

        </div>
        <div class="col-md-6">
            <strong>Product Images</strong>
            <input type="file" id="images" name="images[]" multiple onchange="preview_image()" />
            <div id="image_preview"></div>
            <hr>
            <strong>Preorder Information</strong>
            <div class="form-group">
                <label>Quota</label>
                <input type="number" name="quota" class="form-control">
            </div>
            <div class="form-group">
                <label>Start Date</label>
                <input type="date" name="start_date" class="form-control">
            </div>
            <div class="form-group">
                <label>End Date</label>
                <input type="date" name="end_date" class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="text-right">
                <input type="hidden" name="status" value="publish" />
                <input type="hidden" name="product_id" />
                <button class="btn btn-outline-secondary" type="button">
                    Save As Draft
                </button>
                <button class="btn btn-success" type="submit">
                    Publish
                </button>
            </div>
        </div>
    </div>
</form>

<!-- start modal-->

@include('product::includes.modal-variant',['variantAttribute'=>$variantAttribute])

@include('product::includes.modal-attribute',['variantAttribute'=>$variantAttribute])

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

    var sizes = [];

    function removeVariant(obj) {
        var row_number = $(obj).data('id');
        var row_id = parseInt(row_number) - 1;
        $('#row' + row_id).remove();
    }

    function changeStatus(data) {
        $('input[name="status"]').val(data);
    }

    function getAllVariant() {

        $.ajax({
            type: "GET",
            url: "{{ route('ajax.all-variant') }}",
            dataType: "json",
            success: function (data) {
                var input = '';
                $.each(data, function (key, value) {
                    input += '<input type="checkbox" name="' + value.attribute + '" title="' + value.attribute + '" value="' + value.id + ',' + value.value + '"/>&nbsp;' + value.attribute;
                });
                $('#variant').html(input);
                //$("#variant").zInput();
            }
        });
    }

    function setAllAttributes(attribute, data) {
        var input = '';
        $.each(data, function (key, value) {
            if (key != 0) {

                input += '<input type="checkbox" name="' + attribute + '" title="' + value + '" value="' + value + '"/>&nbsp;' + value;
            }
        });
        $('#value').html(input);
        //$("#value").zInput();
    }

    function cartesian() {
        var r = [], arg = arguments, max = arg.length - 1;
        function helper(arr, i) {
            for (var j = 0, l = arg[i].length; j < l; j++) {
                var a = arr.slice(0); // clone arr
                a.push(arg[i][j]);
                if (i == max)
                    r.push(a);
                else
                    helper(a, i + 1);
            }
        }
        helper([], 0);
        return r;
    }

    function callBtnGenerate() {
        $('#btn-generate-variant').click();
    }

    $(function () {
        var attributes = [];

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
                        window.location.href = "{{ route('product.index') }}";
                    }
                }
            });
            return false;
        });

        $('#form-add-new-variant').submit(function (event) {

            event.preventDefault();

            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: $(this).serializeArray(),
                success: function (data) {
                    if (data.id > 0) {
                        $('.nav-tabs a[href="#Variant-Attribute"]').tab('show');
                        $('input[name="attribute"]').val('');
                        $('input[name="value"]').val('');
                        getAllVariant();
                    }
                }
            });
            $(this).attr('action', '{{ url("admin/ajax/add-by-variant/") }}');
            return false;

        });

        $('#selectProductType').on('change', function () {

            $.ajax({
                type: "GET",
                url: "{{ route('ajax.view-product-type') }}",
                data: {
                    type: $(this).val()
                },
                dataType: 'json',
                success: function (data) {
                    $('#view-product-type').html(data.html);
                }
            });
        });

        $('#ModalProductProperties').on('shown.bs.modal', function (e) {
            $('#variant').html('');
            getAllVariant();
        });

        $('#ModalVariantAttribute').on('shown.bs.modal', function (e) {
            var button = e.relatedTarget;
            var values = $(button).data('val').split(',');
            var name = $(button).data('name');
            var index = $(button).data('id');

            $('input[name="index"]').val(index);

            setAllAttributes(name, values);

            var form_action_url = $('#form-add-value-variant').attr('action');
            $('#form-add-value-variant').attr('action', form_action_url + '/' + values[0]);

            //$("#value").zInput();
        });

        $('#form-submit-variant').submit(function (event) {

            event.preventDefault();
            var data = $(this).serializeArray();
            var row = '';
            $.each(data, function (key, value) {
                row += '<div class="inline-row">';
                row += '<span class="mr-3 proper">' + value.name + '</span>';
                row += '<div id="attr-' + value.name + '"></div>';
                row += '<a class="btn sub-circle my-2 my-sm-0" href="#" role="button" data-toggle="modal"';
                row += 'data-target="#ModalVariantAttribute" data-id="' + key + '" data-name="' + value.name + '" data-val="' + value.value + '">';
                row += '<img class="add-svg" src="{{ url("vendor/admin/images/add.svg")  }}" alt="add-image">';
                row += '</a></div>';
                $('#variant-attributes').html(row);
            });

            $('#ModalProductProperties').modal('hide');

        });


        $('#form-add-value-variant').submit(function (event) {
            event.preventDefault();

            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: $(this).serializeArray(),
                success: function (data) {
                    if (data.id > 0) {
                        $('.nav-tabs a[href="#Attribute-Value"]').tab('show');
                        $('input[name="value"]').val('');
                        var values = data.value.split(',');
                        setAllAttributes(data.attribute, values);
                    }
                }
            });
        });

        $('#form-choose-attribute').submit(function (event) {
            event.preventDefault();
            var data = $(this).serializeArray();

            var selector = $('#attr-' + data[0].name);
            var pills = '';
            var items = [];
            var index_key = 0;
            $.each(data, function (key, val) {
                if (val.name == 'index') {
                    index_key = val.value;
                } else {

                    pills += '<span class="badge badge-pill badge-primary mr-3">' + val.value.toUpperCase() + '</span>';

                    if (items.indexOf(val.value) === -1) {

                        items.push(val.value);
                    }
                }

            });

            attributes[index_key] = items;

            console.log(attributes);

            $(selector).html(pills);

            $('#ModalVariantAttribute').modal('hide');

        });

        $('#btn-generate-variant').on('click', function () {

            var results = cartesian.apply(this, attributes);
            var tbody = '';

            $.each(results, function (key, val) {
                tbody += '<tr>';
                tbody += '<td>' + val.join(' ').toUpperCase();
                tbody += '<input type="hidden" name="list_variant[]" value="' + val.join(' ') + '" /></td>';
                tbody += '<td><input type="text" name="list_sku[]" /></td>';
                tbody += '<td><input type="number" name="list_price[]" /></td>';
                tbody += '<td><input type="number" name="list_initial[]" /></td>';
                tbody += '</tr>';
            });

            $('#input-generate-variant').html(tbody);

        });



    });
</script>
@endpush