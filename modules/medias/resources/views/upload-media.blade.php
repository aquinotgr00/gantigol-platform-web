<html>
	<head>
		<title>upload media</title>
		{{-- CSS assets in head section --}}
		<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />

		{{-- ... a lot of main HTML code ... --}}

		{{-- JS assets at the bottom --}}
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
		{{-- ...Some more scripts... --}}
		<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
	</head>
	<body>
		<section>
			<form action="{{ route("projects.store") }}" method="POST" enctype="multipart/form-data">
			    @csrf

			    {{-- Name/Description fields, irrelevant for this article --}}

			    <div class="form-group">
			        <label for="document">Documents</label>
			        <div class="needsclick dropzone" id="document-dropzone">

			        </div>
			    </div>
			    <div>
			        <input class="btn btn-danger" type="submit">
			    </div>
			</form>
		</section>
	</body>
	<script>
		  var uploadedDocumentMap = {}
		  Dropzone.options.documentDropzone = {
		    url: '{{ route('projects.storeMedia') }}',
		    maxFilesize: 2, // MB
		    addRemoveLinks: true,
		    headers: {
		      'X-CSRF-TOKEN': "{{ csrf_token() }}"
		    },
		    success: function (file, response) {
		      $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')
		      uploadedDocumentMap[file.name] = response.name
		    },
		    removedfile: function (file) {
		      file.previewElement.remove()
		      var name = ''
		      if (typeof file.file_name !== 'undefined') {
		        name = file.file_name
		      } else {
		        name = uploadedDocumentMap[file.name]
		      }
		      $('form').find('input[name="document[]"][value="' + name + '"]').remove()
		    },
		    init: function () {
		      @if(isset($project) && $project->document)
		        var files =
		          {!! json_encode($project->document) !!}
		        for (var i in files) {
		          var file = files[i]
		          this.options.addedfile.call(this, file)
		          file.previewElement.classList.add('dz-complete')
		          $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
		        }
		      @endif
		    }
		  }
</script>
	
</html>