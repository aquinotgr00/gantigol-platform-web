<form action="{{ route('projects.store') }}" method="post" id="media-upload" data-redirect-url="{{ route('media.library') }}">
    @csrf
    <div class="dropzone dropzone-media needsclick dz-clickable" id="media-dropzone" data-dropzone-url="{{ route('projects.storeMedia') }}">
        <div class="dz-message message-dz" data-dz-message style="display: block;">
            <h1>Drop Files To Upload</h1>
            <p>or click to browse</p>
        </div>
    </div>

    <div class="float-right mt-3">
        <button type="submit" class="btn" disabled>Upload</button>
    </div>
</form>