@php
    $filePath = $file->getUrl();
@endphp

<div class="col-md-3 media-file" data-image-id="{{$file->id}}" data-image-url="{{$filePath}}">
    <a href="#" class="h-100">
        <img class="img-fluid img-thumbnail" src="{{$filePath}}" alt="">
    </a>
    <p class="mt-2 mb-4">{{$file->file_name}}</p>
</div>