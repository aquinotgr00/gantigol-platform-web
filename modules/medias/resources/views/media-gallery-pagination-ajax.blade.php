{{ $media->appends(request()->only('s','c'))->links('medias::includes.pagination.bootstrap-4') }}