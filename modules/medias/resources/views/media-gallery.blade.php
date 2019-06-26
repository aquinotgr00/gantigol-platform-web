{{-- start header --}}
@php
$asPage = $asPage??true;
@endphp
<div class="row">
    <div class="col-5">
        <form id="search-form" class="form-inline my-2 my-lg-0" action="{{ route('media.library') }}" data-enable-submit="{{ $asPage }}">
            @searchbar()
            @if($asPage)
                @addNewButton(['action'=>route('media.library.create')])
            @endif
        </form>
    </div>
    <div class="col">
        <div class="float-right">
            @filterMediaByCategory
        </div>
    </div>
</div>
{{-- end header --}}

{{-- start gallery --}}
<div class="row mt-4 media-list">
    @each('medias::media-gallery-item', $media, 'file')
</div>
{{-- end gallery --}}

<div class="d-flex justify-content-center">
    <div class="pgntn">
        {{ $media->appends(request()->only('s','c'))->links($asPage?'medias::includes.pagination.default':'medias::includes.pagination.bootstrap-4') }}
    </div>
</div>
