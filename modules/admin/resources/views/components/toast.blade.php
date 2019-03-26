@if(session()->has('notify'))

@php
    $toastColor = 'success';
    if(session('notify')['type']!=='success') {
        $toastColor = 'danger';
    }
@endphp
<div class="toast bg-{{$toastColor}}" role="alert" aria-live="assertive" aria-atomic="true" data-delay="4000" style="position:absolute; right:2em; top:2em;">
    <div class="toast-header">

        <strong class="mr-auto">{{ $title }}</strong>
        
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="toast-body text-white">
        {{ $slot }}
    </div>
</div>
@endif