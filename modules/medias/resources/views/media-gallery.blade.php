{{-- start header --}}
<div class="row">
    <div class="col-6">
        <form class="form-inline my-2 my-lg-0">
            @searchbar()
            @if($asPage??true)
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