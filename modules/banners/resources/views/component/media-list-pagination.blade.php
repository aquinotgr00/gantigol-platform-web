<div class="row mt-1">
  @foreach($media as $file)
         @if(starts_with($file->mime_type, 'image'))
                    <div class="col-md-3">
                      <a href="#" data-src="{{ $file->getUrl() }}" class="h-100 list-media-picker">
                        <img class="img-fluid img-thumbnail" src="{{ $file->getUrl() }}" alt="">
                      </a>
                      <p class="mt-2 mb-4">{!! $file->file_name !!}</p>
                    </div>
          @endif
  @endforeach
            </div>
            <div class="modal-footer mt-1">
              {{ $media->links() }}
              <button type="button" id="buttonSelectImage" data-dismiss="modal" class="btn btn-success">Submit</button>
            </div>