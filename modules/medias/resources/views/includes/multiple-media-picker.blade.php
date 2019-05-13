<div class="multiple-media-picker">
    @if($values)
        @foreach($values as $value)
            @include('medias::includes.single-media-picker',['value'=>$value])
        @endforeach
    @else
    <a href="#" data-toggle="modal" data-target="#media-library-modal" data-single-upload="false" data-on-select="">
        <img data-default-image="{{ asset('vendor/media/img/multi-placeholder.png') }}" src="{{ asset('vendor/media/img/multi-placeholder.png') }}" class="img-thumbnail" id="product-category-image" />
    </a>
    @endif
</div>