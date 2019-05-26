@php
$isModal = $isModal ?? true;
@endphp

<ul class="nav nav-pills" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="media-tab" data-toggle="tab" href="#media" role="tab" aria-controls="media" aria-selected="true">Media Library</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="upload-tab" data-toggle="tab" href="#upload" role="tab" aria-controls="upload" aria-selected="false">Upload Media</a>
    </li>
</ul>

<div class="tab-content mt-3" id="media-library" data-is-modal="{{$isModal}}">
    <div class="tab-pane fade show active" id="media" role="tabpanel" aria-labelledby="media-tab">
        <div class="row">
            <div class="@if($isModal) col-md-12 @else col-md-9 @endif list-media">
                @include('medias::media-gallery-with-pagination')
            </div>
            @includeWhen(!$isModal, 'medias::media-category')
        </div>
    </div>
    <div class="tab-pane fade" id="upload" role="tabpanel" aria-labelledby="upload-tab">
        @include('medias::media-uploader',['onSuccessfulUpload'=>$onSuccessfulUpload??null])
    </div>
</div>

<div id="openModalNotification" class="modal fade" role="dialog">
    <div class="modal-dialog"> 
        <div class="modal-content">
            <div class="modal-body">
                <p id="notification-message"></p>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="{{ asset('vendor/media/js/medialib.js') }}"></script>
@endpush