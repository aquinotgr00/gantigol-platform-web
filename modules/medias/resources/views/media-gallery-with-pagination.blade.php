<div id="media-gallery-with-pagination" class="card-deck">
    @foreach($media as $file)
        @if(starts_with($file->mime_type, 'image'))

            @php
                $filePath = $file->getUrl();
            @endphp

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 action-image" 
                 data-id="{{ $file->id}}" 
                 data-src="{{ $filePath }}" 
                 data-name="{{ $file->file_name }}">

                <div class="card mb-3" data-image-id="{{ $file->id }}" data-image-url="{{ $filePath }}">
                    <img src="{{ $filePath }}" class="card-img-top" alt="{{ $file->name }}">
                    <div class="card-body"></div>
                    <div class="card-footer text-truncate" title="{{ $file->file_name }}">{{ $file->file_name }}</div>
                </div>
            </div>
        @else
           <span class="glyphicon glyphicon-file large-icon"></span>
        @endif
    @endforeach
</div>

@if($isModal)
{{ $media->links('medias::includes.pagination.bootstrap-4') }}
@else
{{ $media->links() }}
@endif