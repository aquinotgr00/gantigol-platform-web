@push('styles')
<style>
    .list-media .card.selected {
        outline: none;
        border-color: #9ecaed;
        box-shadow: 0 0 10px #9ecaed;
    }
</style>
@endpush

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
        @include('medias::media-gallery-and-uploader',['onMediaSelected'=>'onMediaSelected'])
    @endslot
@endmodal

@endsection

@push('scripts')
<script>
    var selectedMedia = []
    let singleFileUpload = false
    var modalStateResetHandler = []
    
    const resetState = function() {
        modalStateResetHandler.forEach(f => f())
        $('.list-media .card').removeClass('selected')
        selectedMedia = []
    }
    
    // handle events
    $('#media-library-modal').on('show.bs.modal', function (event) {
        resetState()
        
        const button = $(event.relatedTarget)
        singleFileUpload = button.data('singleUpload')
        const onSelectCallback = button.data('onSelect')
        
        $(this).data('onSelect',onSelectCallback)
        $(this).data('selected',false)
        
        $('input.dz-hidden-input[type=file]').prop('multiple',true)
        if(singleFileUpload) {
            $('input.dz-hidden-input[type=file]').prop('multiple',false)
        }
    })
    
    $('#media-library-modal').on('hide.bs.modal', function (event) {
        const isSelected = $(this).data('selected')
        const onSelectCallback = $(this).data('onSelect')
        
        if(isSelected) {
            self[onSelectCallback](selectedMedia)
        }
    })
    
    function onMediaSelected() {
        $('#media-library-modal').data('selected',true)
        $('#media-library-modal').modal('hide')
    }
</script>
@endpush