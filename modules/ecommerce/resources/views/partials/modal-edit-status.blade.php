<div class="modal fade" id="editStatus" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="exampleModalLongTitle">Edit Shipping Details</h1>
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
                        <label>Status</label>
                        <select name="order_status" class="form-control">
                            <option value="">Choose one</option>
                            @if(isset($status))
                            @foreach($status as $key => $value)
                            <option value="{{ $value }}" {{ ($order->order_status == $value)? 'selected' : '' }}>{{ $key }}</option>
                            @endforeach
                            @endif 
                        </select>
                    </div>
                    

                    <div class="form-group">
                        <label>Tracking Number</label>
                        <input type="text" name="shipping_tracking_number" value="{{ $order->shipping_tracking_number }}" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Notes</label>
                        <textarea name="notes" class="form-control">{{ $order->notes }}</textarea>
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