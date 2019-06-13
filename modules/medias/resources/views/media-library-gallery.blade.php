@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/media/css/medialib.css') }}">
@endpush

@pageHeader(['title'=>'Media Library'])

<div class="row">
    <div class="col-md-7 col-lg-8">
        {{-- start image gallery --}}
        @include('medias::media-gallery')
        {{-- end image gallery --}}
    </div>
    {{-- start media details --}}
    @include('medias::media-category')
    {{-- end media details --}}
</div>

@push('scripts')
<script src="{{ asset('vendor/media/js/medialib.js') }}"></script>
@endpush