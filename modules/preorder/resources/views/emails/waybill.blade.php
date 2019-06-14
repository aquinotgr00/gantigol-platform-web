@component('mail::message')

@if(isset($production))

# Your shipping number is
## {{ $production->tracking_number }}
> ID Transaction #{{ $production->getTransaction->invoice }}
Thank u,
{{ config('app.name') }}

@endif

@endcomponent