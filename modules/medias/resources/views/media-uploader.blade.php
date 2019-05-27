@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
@endpush

<form 
    action="{{ route('projects.store') }}" 
    method="POST" 
    enctype="multipart/form-data" 
    id="file-uploader" 
    data-tmp-upload-url="{{ route('projects.storeMedia') }}"
    data-on-successful-upload="{{$onMediaSelected??null}}">
    @csrf

    <div class="form-group">
        <label for="document">Documents</label>
        <div class="needsclick dropzone" id="document-dropzone"></div>
    </div>
    <div>
        <input class="btn btn-primary" type="submit">
    </div>
</form>

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
@endpush