@push('styles')
<link href="{{ asset('vendor/media/css/medialib.css') }}" rel="stylesheet">
@endpush

<ul class="nav nav-pills" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="media-tab" data-toggle="tab" href="#media" role="tab" aria-controls="media" aria-selected="true">Media Library</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="upload-tab" data-toggle="tab" href="#upload" role="tab" aria-controls="upload" aria-selected="false">Upload Media</a>
    </li>
</ul>

<div class="tab-content mt-3" id="media-gallery-and-uploader" data-is-modal="{{$isModal ?? true}}">
    <div class="tab-pane fade show active" id="media" role="tabpanel" aria-labelledby="media-tab">
        @include('medias::media-gallery', ['onMediaClick'=>$onMediaClick??null, 'onMediaDblClick'=>$onMediaDblClick??null])
    </div>
    <div class="tab-pane fade" id="upload" role="tabpanel" aria-labelledby="upload-tab">
        @include('medias::media-uploader',['onSuccessfulUpload'=>$onSuccessfulUpload??null])
    </div>
</div>

@push('scripts')
<script src="{{ asset('vendor/media/js/medialib.js') }}"></script>
@endpush