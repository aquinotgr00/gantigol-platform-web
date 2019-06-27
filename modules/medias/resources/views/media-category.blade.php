<div class="col-md-4 col-lg grs">
    <form action="{{ route('media.assignMediaCategory') }}" method="post" id="form-assign-category">
        @csrf
        <input type="hidden" id="media-id" name="id">
        <div class="form-group mt-5">
            <label>Media Name</label>
            <p id="media-name-placeholder">Click any media to change its category</p>
            <p id="media-name"></p>
        </div>
        <div class="form-group">
            <label for="media-category">Media Category</label>
            <div class="form-row">
                <div class="col-10">
                    <select class="form-control" id="media-category" name="category">
                        <option value="">Uncategorized</option>
                        @foreach ($mediaCategories as $category)
                        <option value="{{ $category->title }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    @addNewButton(['action'=>'#new-media-category-modal','toggleModal'=>true])
                </div>
            </div>
        </div>
        <div>
            <button type="submit" class="btn" id="button-assign-media-category" disabled>Apply</button>
        </div>
    </form>
</div>

@section('modals')

{{-- Assign Media Category Modal --}}
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

{{-- Confirm Delete Media Modal --}}
@modal(['id'=>'confirm-delete-media-modal','title'=>'Delete Media', 'verticalCenter'=>true])
    @slot('body')
        <form method="post" action="{{ route('media.destroy',['id'=>1]) }}" id="form-delete-media">
            @csrf
            @method('DELETE')
            <img class="media-preview" src="" />
            <div class="form-group">
                <label>Click Delete to confirm</label>
            </div>
            <div class="float-right">
                <button type="submit" class="btn btn-success" id="button-delete-media">Delete</button>
            </div>
        </form>
    @endslot
@endmodal

@endsection