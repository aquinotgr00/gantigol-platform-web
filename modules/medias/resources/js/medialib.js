let multiSelect = false
let mediaLibraryIsModal = false
let onSelectCallback = undefined

let selectedMedia = []
let modalStateResetHandler = []

const resetState = function() {
	modalStateResetHandler.forEach(f => f())
	const mediaDropzone = Dropzone.forElement('#media-dropzone')
	mediaDropzone.removeAllFiles()
	mediaDropzone.options.maxFiles = multiSelect?null:1
	
	$('.media-file').removeClass('selected')
	$('#media-library-modal-tab li:first-child a').tab('show')
	selectedMedia = []
}

if(typeof Dropzone === 'function') {
	const headers = {'X-CSRF-TOKEN': $('input[name=_token]').val()}
	const tmpUploadUrl = $('#media-dropzone').data('dropzoneUrl')
	
	Dropzone.options.mediaDropzone = {
		headers,
		url:tmpUploadUrl,
		maxFilesize: 2, // MB
		addRemoveLinks: true,
		init: function () {
			this.on('addedfile', function(file) {
				$('#media-upload .dz-message').hide()
			})

			this.on('removedfile', function(file) {
				file.previewElement.remove()
				const {uuid} = file.upload
				$('input[data-upload-id="' + uuid + '"]').remove()

				if($('input[name="document[]"]').length===0) {
					$('#media-upload .dz-message').show()
					$('#media-upload button[type=submit]').removeClass('btn-success').prop('disabled',true)
				}
			})

			this.on('success', function (file, response) {
				const {uuid} = file.upload
				$('#media-upload').append('<input type="hidden" name="document[]" value="' + response.name + '" data-upload-id="' + uuid + '">')
				$('#media-upload button[type=submit]').addClass('btn-success').prop('disabled',false)
			})
		}
	}
}

function handleGalleryResponse(data) {
	const {gallery, links} = data
	$('.media-list').html(gallery)
	$('#all-media .pgntn').html(links)
}

const selectAndClose = function() {
	selectedMedia = $('.media-file.selected').map(function() {
		return {
			id:$(this).data('imageId'),
			url:$(this).data('imageUrl')
		}
	}).get()
	$('#media-library-modal').modal('hide')
	self[onSelectCallback](selectedMedia)
}

$(function() {
	modalStateResetHandler.push(function() {
		$.get($('#search-form').attr('action')).done(handleGalleryResponse)
	})
	
	$('#search-form').submit(function(event) {
		if(!$(this).data('enableSubmit')) {
			event.preventDefault()
			$.get($('#search-form').attr('action'),{s:$('input[name=s]').val()}).done(handleGalleryResponse)
		}
    })
	
	$('#media-library-modal').on('show.bs.modal', function (event) {
		const button = $(event.relatedTarget)
		multiSelect = button.data('multiSelect')
		onSelectCallback = button.data('onSelect')
		
		resetState()
		
		$('input.dz-hidden-input[type=file]').prop('multiple', multiSelect)
	})
	
	$('#confirm-delete-media-modal').on('show.bs.modal', function (event) {
		const button = $(event.relatedTarget)
		const imageId = button.parent().data('imageId')
		const imageUrl = button.parent().data('imageUrl')
		$('#form-delete-media').attr('action',$('#form-delete-media').attr('action').replace(/\/[^\/]*$/, '/'+imageId))
		$('#confirm-delete-media-modal img.media-preview').attr('src', imageUrl)
	})
	
	$('#media-upload').submit(function(event) {
		event.preventDefault()
		$.post($("#media-upload").attr('action'),$("#media-upload").serialize())
		.done(function(response) {
			const { status, data } = response
			if(status==='success') {
				if(mediaLibraryIsModal) {
					$('#media-library-modal').modal('hide')
					self[onSelectCallback](data.images)
				}
				else {
					document.location.replace($("#media-upload").data('redirectUrl'))
				}
			}
		})
	})
	
	$('.media-list').on('click','.media-file', function(event) {
		event.preventDefault()
		if(!multiSelect) {
			$('.media-file').not(this).removeClass('selected')
		}
		$(this).toggleClass('selected')
		if(!mediaLibraryIsModal) {
			$('#media-name-placeholder').toggle(!$(this).hasClass('selected'))
			$('#media-name').text($(this).hasClass('selected')?$(this).data('imageName'):'')
			$('#media-id').val($(this).hasClass('selected')?$(this).data('imageId'):'')
			$('#button-assign-media-category')
					.toggleClass('btn-success',$('.media-file.selected').length!==0)
					.prop('disabled',$('.media-file.selected').length===0)
		}
		
	})
	
	$('.media-list').on('dblclick','.media-file', function(e) {
		if(mediaLibraryIsModal) {
			if(!multiSelect) {
				$(this).addClass('selected')
				selectAndClose()
			}
		}
	})
	
	$('#all-media').on('click', '.page-link.ajax', function(event) {
		event.preventDefault()

		$.get($(this).attr('href')).done(handleGalleryResponse)
	})
	
	$('#button-select-media').on('click', function (event) {
		event.preventDefault()
		selectAndClose()
	})
	
	$('#button-add-media-category').on('click', function(event) {
		event.preventDefault()
		
		$.post($("#form-add-media-category").attr('action'),$("#form-add-media-category").serialize())
		.done(function(response) {
			const {id, title} = response.data
			
			$('#media-category').append($('<option>', { value: id,text: title }))
			
			let params = {}
			if($('input[name=s]').val()) {
				params['s'] = $('input[name=s]').val()
			}
			params['c'] = title
			
			$('div[aria-labelledby=filter-media-by-category]').append($('<a class="dropdown-item" href="'+$('#search-form').attr('action')+'?'+$.param(params)+'">'+title+'</a>'))
			$('#new-media-category-modal').modal('hide')
		})
		
	})
	
	/*
	$('#form-assign-category').submit(function(event) {
		event.preventDefault()
		$.post($(this).attr('action'),$(this).serialize())
		.done(function(response) {
			
		})
	})
	*/
	
	$('div[aria-labelledby=filter-media-by-category]').on('click','a.dropdown-item', function(event) {
		if(mediaLibraryIsModal) {
			event.preventDefault()
			$.get($(this).attr('href')).done(handleGalleryResponse)
		}
	})
	
	$('#media-category').change(function() {
		console.log($(this).val())
	})

});


