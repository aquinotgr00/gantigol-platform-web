<!-- Modal Variant Attribute-->
<div class="modal fade" id="ModalInputShippingNumber" tabindex="-1" role="dialog" aria-labelledby="exampleModalVariant"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="form-update-courier" action="{{ route('production.update-courier') }}" method="post">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title" id="exampleModalLongTitle">Input Shipping Number</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body container mt-3">
                    <div class="form-group">
                        <label for="">Courier Name</label>
                        <input type="text" name="courier_name" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="">Courier Service</label>
                        <input type="text" name="courier_type" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="">Courier Fee</label>
                        <input type="number" name="courier_fee" class="form-control" />
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="text-right">
                        <input type="hidden" name="production_id" />
                        <button type="submit" class="btn btn-success">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Variant Attribute-->