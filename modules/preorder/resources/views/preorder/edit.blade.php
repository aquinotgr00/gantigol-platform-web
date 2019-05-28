@extends('admin::layout-nassau')

@push('scripts')
<script>
    $(document).ready(function () {

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

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="clearfix">
            <div class="float-left">
                <a class="btn btn-default btn-sm" href="{{ route('list-preorder.index') }}">Back</a>&nbsp;
                <strong>Edit {{ (isset($preOrder->product->name))? $preOrder->product->name : 'Untitled'   }}</strong>
            </div>
            <div class="float-right">
                <a class="btn btn-outline-primary btn-sm" href="{{ route('list-preorder.show',$preOrder) }}">View
                    Preorder</a>
            </div>
        </div>
    </div>
    <form action="{{ route('preorder.update',$preOrder->id) }}"  method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{  method_field('PUT') }}
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <strong>Product Images</strong>
                    <input type="file" id="images" name="images[]" onchange="preview_image();" multiple />
                    <div id="image_preview"></div>
                    <hr>
                    <div>
                        <strong>Product Tags</strong>
                        <hr>
                        <span class="badge badge-primary">Primary</span>
                        <span class="badge badge-secondary">Secondary</span>
                        <span class="badge badge-success">Success</span>
                        <span class="badge badge-danger">Danger</span>
                        <span class="badge badge-warning">Warning</span>
                        <span class="badge badge-info">Info</span>
                        <span class="badge badge-light">Light</span>
                        <span class="badge badge-dark">Dark</span>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" name="name" class="form-control"
                            value="{{ (isset($preOrder->product->name))? $preOrder->product->name : 'Untitled'   }}" />
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description"
                            class="form-control">{!! (isset($preOrder->product->description))? $preOrder->product->description : '' !!}</textarea>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" name="price" step="any" class="form-control"
                                    value="{{ (isset($preOrder->product->price))? $preOrder->product->price : '' }}" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Weight</label>
                                <input type="number" name="weight" step="any" class="form-control"
                                    value="{{ (isset($preOrder->product->weight))? $preOrder->product->weight : 0   }}" />
                            </div>
                        </div>
                    </div>
                    <strong>Preorder Information</strong>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Quota</label>
                                <input type="number" name="quota" class="form-control" value="{{ $preOrder->quota }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>End Date</label>
                                <input type="date" name="end_date" class="form-control"
                                    value="{{ $preOrder->end_date }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Status Pre-order</label>
                                <select name="status" class="form-control">
                                    <option value="">Choose one</option>
                                    <option value="publish" {{ (isset($preOrder->product->status)
                                            && $preOrder->product->status == 'publish')? 'selected' : '' }}>Publish
                                    </option>
                                    <option value="draft" {{ (isset($preOrder->product->status)
                                        && $preOrder->product->status == 'draft')? 'selected' : ''  }}>Draft</option>
                                    <option value="closed" {{ (isset($preOrder->product->status)
                                                && $preOrder->product->status == 'closed')? 'selected' : ''  }}>Closed
                                    </option>

                                </select>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="text-right">
                <input type="hidden" value="{{ (isset($preOrder->product->id))? $preOrder->product->id : 0  }}"
                    name="product_id">
                <button class="btn btn-primary" type="submit">
                    <i class="fa fa-save"></i>&nbsp;
                    Save
                </button>
            </div>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
    function preview_image() {
        var total_file = document.getElementById("images").files.length;
        for (var i = 0; i < total_file; i++) {
            $('#image_preview').append("<img src='" + URL.createObjectURL(event.target.files[i]) + "' class='col-md-2'>");
        }
    }
</script>
@endpush