@component('mail::message')


# Your shipping number is
## {{ (isset($tracking_number))? $tracking_number : ''  }}
> ID Transaction #{{ (isset($invoice))? $invoice : '' }}
Thank u,
{{ config('app.name') }}


@endcomponent