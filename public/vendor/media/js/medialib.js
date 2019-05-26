const headers = {'X-CSRF-TOKEN': $('input[name=_token]').val()}
const isModal = $('#media-gallery-and-uploader').data('isModal')

const onMediaClickCallback = $('#media-gallery').data('onMediaClick')
const onMediaDblClickCallback = $('#media-gallery').data('onMediaDblClick')
const onMediaSelectedCallback = $('#media-gallery').data('onMediaSelected')
const onSuccessfulUploadCallback = $('#file-uploader').data('onSuccessfulUpload')

const tmpUploadUrl = $('#file-uploader').data('tmpUploadUrl')

let selectedMedia = []
let singleSelect = false
let modalStateResetHandler = []

const resetState = function() {
	modalStateResetHandler.forEach(f => f())
	$('.list-media .card').removeClass('selected')
	selectedMedia = []
}

var uploadedDocumentMap = {}
//dropzone upload
Dropzone.options.documentDropzone = {
	url: tmpUploadUrl,
	maxFilesize: 2, // MB
	addRemoveLinks: true,
	headers,
	success: function (file, response) {
		$('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')
		uploadedDocumentMap[file.name] = response.name
	},
	removedfile: function (file) {
		file.previewElement.remove()
		let name = ''
		if (typeof file.file_name !== 'undefined') {
			name = file.file_name
		} else {
			name = uploadedDocumentMap[file.name]
		}
		$('form').find('input[name="document[]"][value="' + name + '"]').remove()
	}
}

