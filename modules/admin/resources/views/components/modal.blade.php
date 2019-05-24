<div class="modal fade" id="{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog @isset($size){{'modal-'.$size}}@endisset" role="document">
        <div class="modal-content">
            
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">{{ $title }}</h5>
                @isset($header)
                {{ $header }}
                @else
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                @endisset
            </div>
            
            <div class="modal-body">{{ $body }}</div>
            @isset($footer)
            <div class="modal-footer">{{ $footer }}</div>
            @endisset
        </div>
    </div>
</div>