@php
    $singleMediaSelect = $single??false;
@endphp

@if($singleMediaSelect)
    @include('medias::includes.single-media-picker',['value'=>$value])
@else
    @include('medias::includes.multiple-media-picker', ['values'=>$values])
@endif

@if($loadModal??true)
@mediaLibraryModal
@endif