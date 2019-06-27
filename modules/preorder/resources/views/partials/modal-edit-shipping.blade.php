<div class="modal fade" id="editShipping" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="exampleModalLongTitle">Edit Shipping Info</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="container">
                <hr class="no-margin">
            </div>
            <form action="{{ route('all-transaction.update',$transaction->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body container">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="{{ $transaction->name }}" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea name="address" class="form-control">{{ $transaction->address }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Subdistrict</label>
                        <br />
                        <select type="text" class="form-control col-12" name="subdistrict_id" style="width:466px;">
                            <option value="{{ $transaction->subdistrict_id }}">
                            {{ (isset($transaction->getSubdistrict->name))? $transaction->getSubdistrict->name : 'Choose One' }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <p id="shipping-city">{{ (isset($transaction->getSubdistrict->city->name))? $transaction->getSubdistrict->city->name : '' }}</p>
                    </div>
                    <div class="form-group">
                        <label>Province</label>
                        <p id="shipping-province">{{ (isset($transaction->getSubdistrict->city->province))? $transaction->getSubdistrict->city->province->name : '' }}</p>
                    </div>
                    <div class="form-group">
                        <label>Zip Code</label>
                        <p id="shipping-zip_code">{{ (isset($transaction->getSubdistrict->city->postal_code))? $transaction->getSubdistrict->city->postal_code : '' }}</p>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" value="{{ $transaction->phone }}" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ $transaction->email }}" class="form-control" />
                    </div>

                    <div class="text-right">
                        <button class="btn btn-primary" type="submit">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>