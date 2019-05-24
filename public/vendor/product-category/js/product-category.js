function updateCategoryImage(selectedMedia) {
	const {id,url} = selectedMedia[0]

	$('#product-category-image-id').val(id)
	$('#product-category-image').attr('src',url)
	$('#btn-delete').addClass('optional')
}

$('#media-picker .delete').click(function(event) {
	event.preventDefault()
	$('#product-category-image-id').val(null)
	$('#product-category-image').attr('src',$('#product-category-image').data('defaultImage'))
	$('#btn-delete').removeClass('optional')
});