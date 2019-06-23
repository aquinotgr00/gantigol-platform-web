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
            <form action="{{ route('all-transaction.update',$transaction->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body container">
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="">Choose one</option>
                            @if(isset($status))
                            @foreach($status as $key => $value)
                            <option value="{{ $value }}" {{ ($transaction->status == $value)? 'selected' : '' }}>{{ ucwords($value) }}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                    

                    <div class="form-group">
                        <label>Tracking Number</label>
                        @php
                        
                        $tracking_number = '';

                        if(isset($transaction->getProduction)){
                            $tracking_number = $transaction->getProduction->tracking_number;
                        }
                        
                        @endphp
                        <input type="text" name="tracking_number" value="{{ $tracking_number }}" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>Notes</label>
                        <textarea name="note" class="form-control">{{ $transaction->note }}</textarea>
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