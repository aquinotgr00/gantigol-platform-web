@php
    $filePath = $file->getUrl();
@endphp

<div class="col-md-3 media-file" data-image-id="{{$file->id}}" data-image-url="{{$filePath}}" data-image-name="{{ $file->file_name }}">
    <a href="#" class="h-100">
        <img class="img-fluid img-thumbnail" src="{{$filePath}}" alt="">
    </a>
    <p class="mt-2 mb-4">{{$file->file_name}}</p>
    
    <a class="media-remove" href="#confirm-delete-media-modal" data-toggle="modal">
        <i class="fas fa-times-circle fa-2x"></i>
    </a>
    
</div>