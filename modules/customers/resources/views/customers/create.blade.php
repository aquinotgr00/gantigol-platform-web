@extends('admin::layout-nassau')

@push('styles')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<style>
    .custom-combobox {
        position: relative;
        display: inline-block;
        padding-left: 0px;
        margin-bottom: 5px;
    }
    .custom-combobox-toggle {
        position: absolute;
        top: 0;
        bottom: 0;
        margin-left: -1px;
        padding: 0;
    }
    .custom-combobox-input {
        margin: 0;
        padding: 6px 12px;
        width: inherit;
        height: 34px;background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-top-color: rgb(204, 204, 204);
        border-right-color: rgb(204, 204, 204);
        border-bottom-color: rgb(204, 204, 204);
        border-left-color: rgb(204, 204, 204);
        border-radius: 4px;
    }
</style>
@endpush

@section('content')
<!-- start form -->
<div class="row">
    <div class="col-md-8 offset-md-2">
        <form id="form-add-customer" action="{{ route('customers.store') }}"
            method="post">
            @csrf
            <div class="form-group">
                <label for="">Customer Name <code>*</code></label>
                <input type="text" name="name" class="form-control" />
            </div>
            <div class="form-group">
                <label for="">Birthday <code>*</code></label>
                <input type="date" name="birthdate" class="form-control" />
            </div>
            <div class="form-group">
                <label for="">Customer Email <code>*</code></label>
                <input type="email" name="email" class="form-control" />
            </div>
            <div class="form-group">
                <label for="">Customer Phone <code>*</code></label>
                <input type="text" name="phone" class="form-control" />
            </div>
            <div class="form-group">
                <label for="">Customer Address <code>*</code></label>
                <textarea type="text" name="address" class="form-control" id="" rows="3"></textarea>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="form-group">
                        <label for="">Sub District <code>*</code></label>
                        <input type="text" name="subdistrict_id" class="form-control" />
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="">ZIP Code</label>
                        <input type="text" name="zip_code" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="">Gender</label>
                <input type="radio" name="gender" value="m" />&nbsp;Male
                <input type="radio" name="gender" value="f" />&nbsp;Female
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-save"></i>&nbsp;
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
@push('scripts')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script>
    $(document).ready(function () {
        
        $('form#form-add-customer').submit(function (event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: formData,
                contentType: false,
                processData: false,
                success: function (res) {
                    if (typeof res.data.id === 'undefined') {
                        $.each(res.data,function(key,val){
                            if (key == 'address') {
                                $('textarea[name="'+key+'"]').css('border','1px solid #dc3545');
                                $('textarea[name="'+key+'"]').after('<small class="text-danger">'+val[0]+'<small>');
                            }else{
                                $('input[name="'+key+'"]').css('border','1px solid #dc3545');
                                $('input[name="'+key+'"]').after('<small class="text-danger">'+val[0]+'<small>');
                            }
                        });
                    } else {
                        alert('Success! customer saved');
                        window.location.href = "{{ route('list-customer.index') }}";
                    }
                }
            });
        });
    });
</script>
@endpush