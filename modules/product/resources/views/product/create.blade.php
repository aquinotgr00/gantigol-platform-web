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
<form action="{{ route('product.store') }}" method="post" id="form-add-product">
    <div class="row">
        <div class="col-6">
            @csrf
            <div class="form-group">
                <label for="name">Product Title</label>
                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name">
                @if ($errors->has('name'))
                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="productDescription">Description</label>
                <textarea type="text" name="description" class="form-control" id="productDescription" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" id="price">
                @if ($errors->has('price'))
                <div class="invalid-feedback">{{ $errors->first('price') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="weight">Weight (gr)</label>
                <input type="number" step="any" name="weight" class="form-control{{ $errors->has('weight') ? ' is-invalid' : '' }}" id="weight">
                @if ($errors->has('weight'))
                <div class="invalid-feedback">{{ $errors->first('weight') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Product Category</label>
                <select class="form-control {{ $errors->has('category_id') ? ' is-invalid' : '' }}" id="exampleFormControlSelect1" name="category_id">
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

            <div id="input-simple-product" style="display:none;">
                @include('product::includes.simple')
            </div>
            <div id="input-variant-product" style="display:none;">
                @include('product::includes.variant')
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

                        <img src="{{ asset('vendor/admin/images/image-plus.svg') }}" id="img-placeholder" class="img-fluid img-thumbnail add-img-featured {{ $errors->has('image') ? 'is-invalid-img' : '' }}" />
                        @if ($errors->has('image'))
                        <p class="is-valid-image-feedback">{{ $errors->first('image') }}</p>
                        @endif
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
                            <a href="#" data-toggle="modal" data-target="#media-library-modal" data-multi-select="true" data-on-select="selectAddtionalImage">
                                <img src="{{ asset('vendor/admin/images/image-plus.svg') }}" id="product-category-image" class="img-fluid img-thumbnail add-img-featured" />
                            </a>
                        </div>
                    </div>
                    <div class="addtional-images"></div>
                </div>
                <small><span>Image size must be 1920x600 with maximum file size</span>
                    <span>400 kb</span></small>

            </div>
        </div>
    </div>
</form>
<!-- end form -->

<!-- start modal-->

@include('product::includes.modal-variant')

@include('product::includes.modal-attribute')

<!-- end modal -->

@endsection

@mediaLibraryModal

@push('scripts')
<script src="{{ asset('vendor/product/vendor/tinymce/tinymce.min.js?apiKey=jv18ld1zfu6vffpxf0ofb72orrp8ulyveyyepintrvlwdarp') }}">
</script>
<script src="{{ asset('vendor/product/js/tagsinput.js') }}"></script>
<script src="{{ asset('vendor/admin/js/zInput.js') }}"></script>
<script>
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
            success: function(data) {
                var input = '';
                $.each(data, function(key, value) {
                    input += '<input type="checkbox" name="' + value.attribute + '" title="' + value.attribute + '" value="' + value.id + ',' + value.value + '"/>&nbsp;' + value.attribute;
                });
                $('#variant').html(input);
                //$("#variant").zInput();
            }
        });
    }

    function getAllAttributes(attribute) {

        $.ajax({
            type: "GET",
            url: "{{ route('ajax.variant-values') }}",
            data: {
                attribute: attribute,
            },
            dataType: "json",
            success: function(data) {
                setAllAttributes(attribute, data);
            }
        });
    }

    function setAllAttributes(attribute, data) {
        var input = '';
        $.each(data, function(key, value) {
            input += '<input type="checkbox" name="' + attribute + '" title="' + value + '" value="' + value + '"/>&nbsp;' + value;
        });
        $('#value').html(input);
        //$("#value").zInput();
    }

    function cartesian() {
        var r = [],
            arg = arguments,
            max = arg.length - 1;

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

    $(function() {
        var attributes = [];

        var size_codes = [];

        tinymce.init({
            selector: '#productDescription'
        });

        $('#form-add-product').on('keyup keypress', function(e) {
            var keyCode = e.keyCode || e.which;
            if (keyCode === 13) {
                e.preventDefault();
                return false;
            }
        });

        $('#form-add-new-variant').submit(function(event) {

            event.preventDefault();

            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: $(this).serializeArray(),
                success: function(data) {
                    if (data.id > 0) {
                        $('.nav-tabs a[href="#Variant-Attribute"]').tab('show');
                        $('input[name="attribute"]').val('');
                        $('input[name="value"]').val('');
                        getAllVariant();
                    }
                }
            });
            return false;

        });

        $('#selectProductType').on('change', function() {

            switch ($(this).val()) {
                case 'simple':
                    $('#input-simple-product').css('display', 'block');
                    $('#input-variant-product').css('display', 'none');
                    break;
                case 'variant':
                    $('#input-simple-product').css('display', 'none');
                    $('#input-variant-product').css('display', 'block');
                    break;
            }
        });

        $('#ModalProductProperties').on('shown.bs.modal', function(e) {
            $('#variant').html('');
            getAllVariant();
        });

        $('#ModalVariantAttribute').on('shown.bs.modal', function(e) {
            var button = e.relatedTarget;
            var values = $(button).data('val').split(',');
            var name = $(button).data('name');
            var index = $(button).data('id');

            $('input[name="index"]').val(index);
            var send = [];
            $.each(values, function(key, val) {
                if (key != 0) {
                    send.push(val);
                }
            });

            setAllAttributes(name, send);
            //getAllAttributes(name);

            var form_action_url = $('#form-add-value-variant').attr('action');
            $('#form-add-value-variant').attr('action', form_action_url + '/' + values[0]);

            //$("#value").zInput();
        });

        $('#ModalVariantAttribute').on('hidden.bs.modal', function(e) {
            $('#form-add-value-variant').attr('action', '{{ url("admin/ajax/add-by-variant") }}');
        });

        $('#form-submit-variant').submit(function(event) {

            event.preventDefault();
            var data = $(this).serializeArray();
            var row = '';

            $.each(data, function(key, value) {

                $('.btn-add-variant').before('<span class="badge badge-pill badge-primary mr-3">' + value.name + '</span>');

                row += '<div class="inline-row">';
                row += '<span class="mr-3 proper">' + value.name + '</span>';
                row += '<a id="attr-' + value.name + '" class="btn sub-circle my-2 my-sm-0" href="#" role="button" data-toggle="modal"';
                row += 'data-target="#ModalVariantAttribute" data-id="' + key + '" data-name="' + value.name + '" data-val="' + value.value + '">';
                row += '<img class="add-svg" src="{{ url("vendor/admin/images/add.svg")  }}" alt="add-image">';
                row += '</a></div>';
                $('#variant-attributes').html(row);
            });

            $('#ModalProductProperties').modal('hide');

        });


        $('#form-add-value-variant').submit(function(event) {
            event.preventDefault();

            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: $(this).serializeArray(),
                success: function(data) {
                    if (data.id > 0) {
                        $('.nav-tabs a[href="#Attribute-Value"]').tab('show');
                        $('input[name="value"]').val('');
                        var values = data.value.split(',');
                        setAllAttributes(data.attribute, values);
                    }
                }
            });

        });

        $('#form-choose-attribute').submit(function(event) {
            event.preventDefault();
            var data = $(this).serializeArray();

            var selector = $('#attr-' + data[0].name);
            var pills = '';
            var items = [];
            var index_key = 0;
            $.each(data, function(key, val) {
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

            $(selector).before(pills);

            $('#ModalVariantAttribute').modal('hide');

        });

        $('#btn-generate-variant').on('click', function() {

            var results = cartesian.apply(this, attributes);
            var tbody = '';
            var price_global = $('input[name="price"]').val();
            $.each(results, function(key, val) {
                tbody += '<tr>';
                tbody += '<td>' + val.join(' ').toUpperCase();
                tbody += '<input type="hidden" name="list_variant[]" value="' + val.join(' ') + '" /></td>';
                tbody += '<td>';
                tbody += '<div class="form-group">';
                tbody += '<label>SKU</label>';
                tbody += '<input type="text" name="list_sku[]" class="form-control"/>';
                tbody += '</div>';
                tbody += '<div class="form-group">';
                tbody += '<label>Price</label>';
                tbody += '<input type="number" name="list_price[]"  class="form-control" value="' + price_global + '"/>';
                tbody += '</div>';
                tbody += '<div class="form-group">';
                tbody += '<label>Initial Stock</label>';
                tbody += '<input type="number" name="list_initial[]"  class="form-control"/>';
                tbody += '</div>';
                tbody += '</td>';
                tbody += '</tr>';
            });

            $('#input-generate-variant').html(tbody);

        });

    });
</script>
@endpush