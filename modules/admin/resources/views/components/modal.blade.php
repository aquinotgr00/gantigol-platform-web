<div class="modal fade" id="{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog @isset($size){{'modal-'.$size}}@endisset {{($verticalCenter??false)?'modal-dialog-centered':''}}" role="document">
        <div class="modal-content">
            
            <div class="modal-header">
                <h1 class="modal-title" id="modalLabel">{{ $title }}</h1>
                @isset($header)
                {{ $header }}
                @endisset
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                
            </div>
            
            <div class="modal-body">{{ $body }}</div>
            @isset($footer)
            <div class="modal-footer">{{ $footer }}</div>
            @endisset
        </div>
    </div>
</div>