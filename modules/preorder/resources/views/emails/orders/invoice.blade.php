@component('mail::message')

@if(isset($transaction))

# {{ config('app.name') }}

---------------------------------------

    Invoice: #{{ $transaction->id }}

    To : {{ $transaction->name }}
    E-Mail: {{ $transaction->email }}
    Phone: {{ $transaction->phone }}
    Bill Address :

    {{ $transaction->address }}

### Summary {#summary}

Product Item        | Size       | Qty    | Price  | Sub Total
-------------------------------- | ------ | --------- | ---------
@foreach($transaction->orders as $key => $value)
{{ $value->product->name }}  | {{ $value->size }}  | {{ $value->qty }}      | {{ number_format($value->price) }}   | {{ number_format($value->subtotal) }}
@endforeach

**Grand Total**: {{ $transaction->amount }} (no tax)

### Terms {#terms}

+ Payments are to be made payable to [NAME] via Paypal[^1] or Direct Deposit[^2].
+ Grand Total must be paid by the end of {{ $transaction->payment_duedate }} (30 days).
+ If Grand Total is not paid by the end of {{ $transaction->payment_duedate }}, an late-fee[^3] will be applied to the Grand Total.

### Payments {#payments}

Bank Account   | Bank Name     | Amount
---------- | --------| ------
0901921020 | BCA     | IDR {{ number_format($transaction->amount) }}
8392832993 | BNI     | IDR {{ number_format($transaction->amount) }}


[^1]: Paypal e-mail address for payments is <[YOUR EMAIL]>.
[^2]: Please contact if you wish to do a Direct Deposit.
[^3]: Late-fee of *2%* interest per-day until paid.

@component('mail::button', ['url' => url('/pay-preorder/'.$transaction->id)])
Pay it
@endcomponent

@else 

# This is invoice 

for more information, please visit www.guestore.com 

Thank u,
{{ config('app.name') }}

@endif

@endcomponent