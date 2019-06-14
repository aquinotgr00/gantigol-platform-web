@php
    $singleSelect = $singleSelect??true;
    $multiSelect = $multiSelect??!$singleSelect;
    
@endphp

<a href="#" data-toggle="modal" data-target="#media-library-modal" data-multi-select="{{ $multiSelect }}" data-on-select="{{ $onSelect }}">
    {{ $slot }}
</a>

@mediaLibraryModal