<div class="media-picker">
    <a href="#" 
       data-toggle="modal" 
       data-target="#media-library-modal" 
       data-single-select="true" 
       data-on-select="">
        <img 
            data-default-image="{{ asset('vendor/media/img/placeholder.png') }}" 
            src="{{ $value??asset('vendor/media/img/placeholder.png') }}" 
            class="img-thumbnail" 
            id="product-category-image" />
    </a>
    <a href="#" id="btn-delete" class="position-absolute delete">
        <i class="far fa-trash-alt"></i>
    </a>
</div>