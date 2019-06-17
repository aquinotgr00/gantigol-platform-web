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
            <form action="{{ route('order-transaction.update',$order->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body container">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="shipping_name" value="{{ $order->shipping_name }}" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea name="shipping_address" class="form-control">{{ $order->shipping_address }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Zip Code</label>
                        <input type="number" name="shipping_zip_code" value="{{ $order->shipping_zip_code }}" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="number" name="shipping_phone" value="{{ $order->shipping_phone }}" class="form-control"/>
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