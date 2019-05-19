@section('modals')

<!-- Media Library Modal -->
@modal(['id'=>'media-library-modal','title'=>'Media Library', 'size'=>'xl'])
    @slot('header')
    <span>
        <button class="btn btn-outline-secondary" type="button" data-dismiss="modal" aria-label="Close">Cancel</button>
        <button id="button-select-media" class="btn btn-primary">Select</button>
    </span>
    @endslot
    @slot('body')
        @include('medias::media-gallery-and-uploader',['isModal'=>true, 'onMediaDblClick'=>'selectMedia', 'onSuccessfulUpload'=>'selectMedia'])
    @endslot
@endmodal

@endsection