const headers = {'X-CSRF-TOKEN': $('input[name=_token]').val()}
const onSuccessfulUploadCallback = $('#file-uploader').data('onSuccessfulUpload')
const isModal = $('#media-gallery-with-pagination').data('isModal')
const onMediaSelectedCallback = $('#media-gallery-with-pagination').data('onMediaSelected')

const tmpUploadUrl = $('#file-uploader').data('tmpUploadUrl')

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

$(function() {
	$('#media-gallery-with-pagination').on('click', '.page-link.ajax', function(event) {
		event.preventDefault()

		$.get($(this).attr('href')).done(function(data) {
			const {gallery} = data
			$('#media-gallery-with-pagination').html(gallery)
		})
	})

	$('.list-media').on('dblclick','.card img', function(e) {
		if(singleFileUpload) {
			$(this).parent().addClass('selected')
			selectAndClose()
		}
	})

	$('.list-media').on('click','.card', function(e) {
		if(singleFileUpload) {
			$('.list-media .card').not(this).removeClass('selected')
		}
		$(this).toggleClass('selected')
	})

	$('#button-select-media').on('click', function (e) {
		selectAndClose()
	})

	$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
		$('#button-select-media').toggle(e.target.id!=='upload-tab')
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
					self[onSuccessfulUploadCallback]()
					Dropzone.instances[0].removeAllFiles()
				}
			})
		})
	}
});

