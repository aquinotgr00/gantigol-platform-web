<div class="row loaded-media">
      @foreach($media as $file)
         @if(starts_with($file->mime_type, 'image'))
            <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-4 filter hdpe action-image" style="margin-bottom:10px;"
            data-id="{{ $file->id}}" data-src="{{ $file->getUrl() }}" data-name="{!! $file->file_name !!}">
                <div class="panel panel-default flex-col">
                    <div class="panel-body flex-grow">
                        <img src="{{ $file->getUrl() }}"  class="img-responsive" alt="{{ $file->name }}">
                    </div>
                  <div class="panel-footer">{!! $file->file_name !!}</div>
                </div>
            </div>
         @else
            <span class="glyphicon glyphicon-file large-icon"></span>
          @endif
      @endforeach
</div>
{{ $media->links() }}
                                