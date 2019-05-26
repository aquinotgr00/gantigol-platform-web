<div class="row">
    <div class="@if($isModal) col-md-12 @else col-md-9 @endif list-media">
        <div id="media-gallery"
            data-on-media-click="{{$onMediaClick}}"
            data-on-media-dbl-click="{{$onMediaDblClick}}"
             
            data-on-media-selected="{{$onMediaSelected??null}}"
            data-media-library-url="{{route('media.library')}}">
            @include('medias::media-gallery-with-pagination',['isModal'=>$isModal])
        </div>
    </div>
    @includeWhen(!$isModal, 'medias::media-category')
</div>
