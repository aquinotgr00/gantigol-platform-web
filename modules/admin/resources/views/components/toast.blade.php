<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="4000" style="position:absolute; right:1em; top:1em;">
    <div class="toast-header">

        <strong class="mr-auto">{{ $title }}</strong>
        
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="toast-body">
        {{ $slot }}
    </div>
</div>