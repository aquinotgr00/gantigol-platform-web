<div class="col-md-4 col-lg grs">
    <div class="form-group mt-5">
        <label for="exampleInputCategoryName">Media Name</label>
        <p></p>
    </div>
    <div class="form-group">
        <label for="media-category">Media Category</label>
        <div class="form-row">
            <div class="col-10">
                <select class="form-control" id="media-category">
                    <option>Uncategorized</option>
                    @foreach ($mediaCategories as $category)
                    <option value="{{$category->id}}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                @addNewButton(['action'=>'#new-media-category-modal','toggleModal'=>true])
            </div>
        </div>
    </div>
    <div>
        <button type="button" class="btn" id="button-add-media-category" disabled>Apply</button>
    </div>
</div>

@section('modals')

<!-- Media Library Modal -->
@modal(['id'=>'new-media-category-modal','title'=>'New Media Category', 'verticalCenter'=>true])
    @slot('body')
    <form method="post" action="{{ route('media.storeCategory') }}" id="form-add-media-category">
        @csrf
        <div class="form-group">
            <label>Media Category</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="float-right">
            <button type="button" class="btn btn-success" id="button-add-media-category">Add</button>
        </div>
    </form>
    @endslot
@endmodal

@endsection