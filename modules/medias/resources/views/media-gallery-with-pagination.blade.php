@push('styles')
<style>
    .card-deck img.card-img-top {
        height: 10rem;
        object-fit: scale-down;
    }
</style>
@endpush

<div id="media-gallery-with-pagination"
     data-on-media-selected="{{$onMediaSelected??null}}"
     data-media-library-url="{{route('media.library')}}"
     data-is-modal="{{$isModal}}">
    @unless($isModal)
    @include('medias::media-gallery',['isModal'=>$isModal])
    @endunless
</div>