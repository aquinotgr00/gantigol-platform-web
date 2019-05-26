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

if(isModal) {
	modalStateResetHandler.push(function() {
		$.get($('#media-gallery-with-pagination').data('mediaLibraryUrl')).done(function(data) {
			const {gallery} = data
			$('#media-gallery-with-pagination').html(gallery)
		})
	})

	$('#file-uploader').submit(function(event) {
		event.preventDefault();

		const url = $(this).prop('action')
		const data = new FormData($(this)[0])

		$.ajax({url,data,type:'POST',
			processData:false,
			contentType: false,
			headers
		}).done(function(response) {
			const {status, data} = response

			if(status==='success') {
				window.selectedMedia = data.images
				window[onSuccessfulUploadCallback]()
				Dropzone.instances[0].removeAllFiles()
			}
		})
	})
	
	const selectAndClose = function() {
		selectedMedia = $('.list-media .card.selected').map(function() {
			return {
				id:$(this).data('imageId'),
				url:$(this).data('imageUrl')
			}
		}).get()

		self[onMediaSelectedCallback]()
	}
	
	// modal events
	$('#media-library-modal').on('show.bs.modal', function (event) {
		resetState()

		const button = $(event.relatedTarget)
		singleSelect = button.data('singleSelect')
		const onSelectCallback = button.data('onSelect')

		$(this).data('onSelect',onSelectCallback)
		$(this).data('selected',false)

		$('input.dz-hidden-input[type=file]').prop('multiple',true)
		if(singleSelect) {
			$('input.dz-hidden-input[type=file]').prop('multiple',false)
		}
	})

	$('#media-library-modal').on('hide.bs.modal', function (event) {
		const isSelected = $(this).data('selected')
		const onSelectCallback = $(this).data('onSelect')

		if(isSelected) {
			onSelectCallback(selectedMedia)
		}
	})

	function onMediaSelected() {
		$('#media-library-modal').data('selected',true)
		$('#media-library-modal').modal('hide')
	}
}

$(function() {
	$('#media-gallery').on('click','.card', function(e) {
		if(singleSelect || !isModal) {
			$('.list-media .card').not(this).removeClass('selected')
		}
		$(this).toggleClass('selected')
	})
	
	$('#button-select-media').on('click', function (e) {
		selectAndClose()
	})
	
	$('#media-gallery').on('dblclick','.card img', function(e) {
		if(isModal) {
			if(singleSelect) {
				$(this).parent().addClass('selected')
				selectAndClose()
			}
		}
	})

	$('#media-gallery-with-pagination').on('click', '.page-link.ajax', function(event) {
		event.preventDefault()

		$.get($(this).attr('href')).done(function(data) {
			const {gallery} = data
			$('#media-gallery-with-pagination').html(gallery)
		})
	})

	$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
		$('#button-select-media').toggle(e.target.id!=='upload-tab')
	})
	
});


