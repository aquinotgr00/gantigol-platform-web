<!-- Modal Variant Attribute-->
<div class="modal fade" id="ModalAdjusment" tabindex="-1" role="dialog" aria-labelledby="exampleModalVariant"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="exampleModalLongTitle">Quantity Adjusment</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-add-adjustment" action="{{ route('ajax.store-adjustment') }}" method="post">
                @csrf
                <div class="modal-body container mt-3">
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="inputNotes">Adjustment Type <code>*</code> </label>
                            <select name="method" id="" class="form-control" required>
                                <option value="">Choose one</option>
                                <option value="+">Stock Addtions</option>
                                <option value="-">Stock Reduction</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputQty">Quantity <code>*</code> </label>
                            <input type="number" name="qty" id="inputQty" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="inputNotes">Notes <code>*</code> </label>
                            <textarea name="note" id="inputNotes" class="form-control" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="text-right">
                        <input type="hidden" name="product_variants_id" />
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Variant Attribute-->