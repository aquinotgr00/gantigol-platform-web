@extends('preorder::layout')

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
        var row_number  = $(obj).data('id');
        var row_id      = parseInt(row_number) - 1;
        $('#row'+row_id).remove();
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
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a class="btn btn-default btn-sm" href="{{ route('list-preorder.index') }}">Back</a>
        <strong class="card-title">New Preorder</strong>
    </div>
    <div class="card-body">
        <form action="{{ route('preorder.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-6">
                    <strong>Product Information</strong>
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" name="price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Weight</label>
                        <input type="number" name="weight" step="any" class="form-control">
                    </div>
                    <strong>Product Variant</strong>
                    <div class="row">
                        <div class="col">
                            <div class="text-right">
                                <button type="button" class="btn btn-sm btn-outline-primary" id="AddVariant">
                                    Add Variant
                                </button>
                            </div>
                            <hr>
                            <table id="tableVariant" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Variant</th>
                                        <th>Sub-Variant</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="template" style="display:none;">
                                        <td>
                                            <input type="text" class="form-control" name="variant[]" />
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="sub_variant[]" />
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="price_variant[]" />
                                        </td>
                                        <td class="text-center">
                                            <a href="#" style="display:none;" data-id="0"
                                                onclick="removeVariant(this)">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
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
                        <button class="btn btn-outline-primary" type="button">
                            <i class="fa fa-save"></i>&nbsp;
                            Draft
                        </button>
                        <button class="btn btn-primary" type="submit">
                            <i class="fa fa-send"></i>&nbsp;
                            Publish
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection