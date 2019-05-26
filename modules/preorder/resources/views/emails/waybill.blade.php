@component('mail::message')

@if(isset($production))

# Your shipping number is
> ID Transaction #{{ $production->getTransaction->id }}
## {{ $production->tracking_number }}

Thank u,
{{ config('app.name') }}

@endif

@endcomponent