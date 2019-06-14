@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/media/css/medialib.css') }}">
<style>
    
</style>
@endpush

@section('modals')

<!-- Media Library Modal -->
@modal(['id'=>'media-library-modal','title'=>'Media Library', 'size'=>'lg', 'verticalCenter'=>true])
    @slot('body')
        
        <div class="mb-3">
            <ul class="nav nav-tabs" id="media-library-modal-tab">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#all-media">All Media</a>
                </li>
                <li class="vr"></li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#add-new-media">Add New Media</a>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div id="all-media" class="tab-pane active">
                @include('medias::media-gallery',['asPage'=>false])
                <div class="modal-footer mt-1">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="button-select-media">Select</button>
                </div>

            </div>
            <div id="add-new-media" class="tab-pane">
                @include('medias::media-uploader')
            </div>
        </div>

    @endslot
@endmodal

@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<script src="{{ asset('vendor/media/js/medialib.js') }}"></script>
<script>
    mediaLibraryIsModal = true
</script>
@endpush