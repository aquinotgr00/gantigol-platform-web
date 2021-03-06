<!-- Modal Edit Customer Info-->
<div class="modal fade" id="EditCustomerInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="exampleModalLongTitle">Edit Customer Info</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="container">
                <hr class="no-margin">
            </div>
            <div class="modal-body container">
                <form id="form-edit-customer" action="{{ route('customers.update',$customer->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $customer->name }}">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea type="text" class="form-control" name="address" rows="3">{{ $customer->address }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Subdistrict</label>
                        <br />
                        <select type="text" class="form-control col-12" name="subdistrict_id" style="width:466px;">
                            <option value="{{ $customer->subdistrict_id }}">
                                {{ (isset($customer->subdistrict->name))? $customer->subdistrict->name : 'Choose One' }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <p id="city">{{ (isset($customer->subdistrict->name))? $customer->subdistrict->city->name : '' }}</p>
                    </div>
                    <div class="form-group">
                        <label>Province</label>
                        <p id="province">{{ (isset($customer->subdistrict->name))? $customer->subdistrict->city->province->name : '' }}</p>
                    </div>
                    <div class="form-group">
                        <label>Zip Code</label>
                        <p id="zip_code">{{ (isset($customer->subdistrict->name))? $customer->subdistrict->city->postal_code : '' }}</p>
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" name="phone" value="{{ $customer->phone }}" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $customer->email }}" />
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Edit Customer Info -->
@push('scripts')
<script>
    $(document).ready(function() {
        $('#form-edit-customer').submit(function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: formData,
                contentType: false,
                processData: false,
                success: function(res) {
                    if (typeof res.data.id === 'undefined') {
                        $.each(res.data, function(key, val) {
                            if (key == 'address') {
                                $('textarea[name="' + key + '"]').css('border', '1px solid #dc3545');
                                $('textarea[name="' + key + '"]').after('<small class="text-danger">' + val[0] + '<small>');
                            } else {
                                $('input[name="' + key + '"]').css('border', '1px solid #dc3545');
                                $('input[name="' + key + '"]').after('<small class="text-danger">' + val[0] + '<small>');
                            }
                        });
                    } else {
                        alert('Success! customer update');
                        //window.location.href = "{{ url('admin/list-customer') }}/"+res.data.id;
                        location.reload();
                    }
                }
            });
        });
    });
</script>
@endpush
