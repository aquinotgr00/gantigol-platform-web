@extends('admin::layout-nassau')

@push('pre-core-style')
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/admin/css/dropzone.min.css') }}">
@endpush

@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/media/css/medialib.css') }}">
@endpush

@section('content')
@pageHeader(['title'=>'Add New Media','back'=>route('media.library')])

<div class="col-11">
    @include('medias::media-uploader')
</div>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<script src="{{ asset('vendor/media/js/medialib.js') }}"></script>
@endpush