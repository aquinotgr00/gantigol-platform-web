<div class="col-md-4 col-lg grs">
    <div class="form-group mt-5">
        <label for="exampleInputCategoryName">Media Name</label>
        <p></p>
    </div>
    <div>
        <label for="media-category">Media Category</label>
        <div class="form-row">
            <div class="col-10">
                <select class="form-control" id="media-category">
                    <option>Uncategorized</option>
                </select>
            </div>
            <div class="col">
                @addNewButton(['action'=>'#new-media-category-modal','toggleModal'=>true])
            </div>
        </div>
    </div>
</div>

@section('modals')

<!-- Media Library Modal -->
@modal(['id'=>'new-media-category-modal','title'=>'New Media Category', 'verticalCenter'=>true])
    @slot('body')
        
    @endslot
@endmodal

@endsection