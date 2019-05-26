@extends('admin::layout-nassau')

@push('styles')
<link rel="stylesheet" href="{{ asset('vendor/product/css/tagsinput.css') }}">
@endpush

@section('content')
<!-- start form -->
<div class="row pl-3">
    <form id="form-add-variant" class="col-md-6 col-lg7 pl-0" action="{{ route('product-variant.store') }}" method="post">
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
            <label for="exampleInputCategoryPrize">Prize</label>
            <input type="number" step="any" name="price" class="form-control" id="exampleInputCategoryPrize">
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
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Product Properties</label>
            <div class="inline-form">
                <div class="inline-row pb-3 mb-3 prod-prop">
                    <a class="btn sub-circle my-2 my-sm-0" role="button" data-toggle="modal"
                        data-target="#ModalProductProperties">
                        <img class="add-svg" src="{{ asset('vendor/admin/images/add.svg') }}" alt="add-image">
                    </a>
                </div>
                <div id="list-properties"></div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Keywords</label>
            <textarea type="text" name="keyword" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            <small>separate with commas</small>
        </div>
        <div class="form-group">
            <label for="exampleInputCategoryRelatedTag">Related Tag</label>
            <input type="text" name="tags"  data-role="tagsinput" class="form-control" id="exampleInputCategoryRelatedTag">
            <small>separate with commas</small>
        </div>
        <div class="d-flex flex-row-reverse">
            <input type="hidden" name="status" value="1" />
            <button type="submit" onclick="changeStatus(1)" class="btn btn-success ml-4">Publish</button>
            <button type="submit" onclick="changeStatus(0)" class="btn btn-outline-secondary">Save As
                Draft</button>
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


<!-- Modal Product Properties-->
<div class="modal fade" id="ModalProductProperties" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="exampleModalLongTitle">Add Product Variant</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body container mt-3">
                <div class="mb-3">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#Variant-Attribute">Variant Attribute</a>
                        </li>
                        <li class="vr">

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#Add-New-Variant">Add New Variant</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div id="Variant-Attribute" class="tab-pane active">
                        <div id="variant"></div>
                        
                        <div class="modal-footer mt-5">
                            <button type="button" id="btn-submit-variant" class="btn btn-success">Submit</button>
                        </div>
                    </div>


                    <div id="Add-New-Variant" class="tab-pane">
                        <div class="form-group">
                            <label for="exampleInputCategoryRelatedTag">Variant Attribute Name</label>
                            <input type="text" name="attribute" class="form-control"
                                id="exampleInputCategoryRelatedTag">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCategoryRelatedTag">Attribute Value</label>
                            <input type="text" name="value" class="form-control" id="exampleInputCategoryRelatedTag">
                            <small>separate with commas</small>
                        </div>
                        <div class="modal-footer mt-5">
                            <button id="btn-store-attribute" type="button" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Product Properties-->

@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="{{ asset('vendor/admin/js/zInput.js') }}"></script>
<script
    src="{{ asset('vendor/product/vendor/tinymce/tinymce.min.js?apiKey=jv18ld1zfu6vffpxf0ofb72orrp8ulyveyyepintrvlwdarp') }}">
    </script>
<script src="{{ asset('vendor/product/js/tagsinput.js') }}"></script>
<script>
    var attributes = [];
    var myArray = [];

    function removeVariant(obj) {
        var row_number = $(obj).data('id');
        var row_id = parseInt(row_number) - 1;
        $('#row' + row_id).remove();
    }

    function changeStatus(data) {
        $('input[name="status"]').val(data);
    }

    function checkAttribute(obj) {
        if ($(obj).prop('checked')) {
            attributes.push($(obj).val());
        } else {
            attributes.pop($(obj).val());
        }

        $.each(attributes, function (key, val) {
            var items = val.split('-');
            myArray.push({
                group: items[0],
                member: items[1]
            })
        });

        var groups = {};
        for (var i = 0; i < myArray.length; i++) {
            var groupName = myArray[i].group;
            if (!groups[groupName]) {
                groups[groupName] = [];
            }
            groups[groupName].push(myArray[i].member);
        }
        myArray = [];
        for (var groupName in groups) {
            myArray.push({ group: groupName, member: groups[groupName] });
        }
    }

    function ucwords(str) {
        return (str + '').replace(/^([a-z])|\s+([a-z])/g, function ($1) {
            return $1.toUpperCase();
        });
    }
    function getProperties() {
        $.ajax({
            type: "GET",
            url: "{{ route('product.get-atribute') }}",
            dataType: 'json',
            success: function (data) {
                var input = "";
                $.each(data, function (key, value) {
                    $.each(value, function (index, val) {
                        var checkbox = val.value.split(val.delimiter);
                        input += val.attribute;
                        input += '<input type="hidden" name="variant[]" value="' + val.id + '" />';
                        input += '<br/>';
                        $.each(checkbox, function (i, j) {
                            input += '<input type="checkbox" onclick="checkAttribute(this)" data-id="' + val.attribute + '" value="' + val.attribute + '-' + j + '"> <small>' + ucwords(j) + '</small>';
                            input += '<br/>';
                        });

                    });
                });
                $('#variant').html(input);

            }
        });
    }


    $(function () {

        tinymce.init({
            selector: '#productDescription'
        });

        getProperties();

        $("#variant").zInput();

        $('#form-add-variant').on('keyup keypress', function (e) {
            var keyCode = e.keyCode || e.which;
            if (keyCode === 13) {
                e.preventDefault();
                return false;
            }
        });

        $('#btn-store-attribute').on('click', function () {

            var formData = new FormData();

            formData.append("attribute", $('input[name="attribute"]').val());
            formData.append("value", $('input[name="value"]').val());
            $.ajax({
                type: "POST",
                url: "{{ route('product.store-atribute') }}",
                data: formData,
                contentType: false,
                processData: false,
                success: function (data) {
                    getProperties();
                }
            });
            return false;
        });

        $('#btn-submit-variant').on('click', function () {
            //$('#ModalProductProperties').modal('hide');
            var listHtml = "";
            console.log(myArray);
            $.each(myArray, function (index, data) {
                listHtml += '<div class="inline-row"><span class="mr-3 proper">' + data.group + ' :</span>';
                $.each(data.member, function (key, val) {
                    if (typeof val === 'string') {
                        listHtml += '<span class="badge badge-pill badge-primary mr-3">' + val + '</span>';
                        listHtml += '<input type="hidden" name="variant[' + data.group + '][]" value="' + val + '" />';
                    }
                });
                listHtml += '</div>';
            });
            $('#list-properties').html(listHtml);
        });





    });
</script>
@endpush