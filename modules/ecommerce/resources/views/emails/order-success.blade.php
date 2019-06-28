@extends('ecommerce::emails.layouts.gantigol')
@section('content')
<table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;margin-bottom:40px;"><tbody><tr style="padding: 0; text-align: left; vertical-align: top;"><td style="padding: 10px; background: #eaeaea; border: 1px #CCC solid;">

<center>
<h3 style="text-align:center;font-size:18px; font-weight:bold; margin:0px">INVOICE: {{$order->invoice_id}}</h3>
<p style="text-align:center;font-size:14px;margin-top:0px; font-weight:bold;">Customer Name: {{$order->buyer_name}}</p>
</center>

<table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;"><tbody><tr style="padding: 0; text-align: left; vertical-align: top;">

<th class="small-12 large-6 columns first" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-weight: 400; line-height: 1.3; margin: 0 auto; padding: 0; padding-left: 0 !important; padding-right: 0 !important; text-align: left; width: 50%;">
<table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;"><tbody><tr style="padding: 0; text-align: left; vertical-align: top;"><th style="Margin: 0; color: #0a0a0a; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-weight: 400; line-height: 1.3; margin: 0; padding: 0; text-align: left;">

<p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-weight: 400; line-height: 1.3; margin: 0; margin-top:10px;margin-bottom: 10px; padding: 0; text-align: center;">
<strong>Billing Name</strong><br> {{$order->billing_name}} 
</p>

<p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-weight: 400; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align:center;">
<strong>Billing Address</strong><br> {{$order->billing_address}} <br> {{$order->billing_subdistrict}}, {{$order->billing_city}}, {{$order->billing_province}}, {{$order->billing_zip_code}}
</p>

<p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-weight: 400; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align:center;">
<strong>Billing Phone</strong><br> {{$order->billing_phone}}</p>

<p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-weight: 400; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: center;">
<strong>Billing Contact</strong><br> {{$order->billing_phone}} 
</p>

</th></tr></tbody></table></th>

<th class="small-12 large-6 columns last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-weight: 400; line-height: 1.3; margin: 0 auto; padding: 0; padding-left: 0 !important; padding-right: 0 !important; text-align: left; width: 50%;"> <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;"><tbody><tr style="padding: 0; text-align: left; vertical-align: top;"><th style="Margin: 0; color: #0a0a0a; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-weight: 400; line-height: 1.3; margin: 0; padding: 0; text-align: left;">

<p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-weight: 400; line-height: 1.3; margin: 0; margin-top:10px;margin-bottom: 10px; padding: 0; text-align: center;">
<strong>Shipping Name</strong><br> {{$order->shipping_name}} 
</p>

<p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-weight: 400; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: center;">
<strong>Shipping Address</strong><br> {{$order->shipping_address}} <br> {{$order->shipping_subdistrict}}, {{$order->shipping_city}}, {{$order->shipping_province}}, {{$order->shipping_zip_code}}
</p>

<p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-weight: 400; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align:center;">
<strong>Shipping Contact</strong><br> {{$order->shipping_phone}}</p>


<p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-weight: 400; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: center;">
<strong>Shipping Courier</strong><br> {{$order->shipment_name}} 
</p>

</th></tr></tbody></table></th>

</tr></tbody></table>
</td></tr></tbody></table>

<table class="row" style="margin-top:30px; margin-bottom:50px;border: 1px #CCC solid; border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
<tr>
    <th style="padding:0px 10px;"><p style="font-weight:bold; font-size:14px;">Item</p></th>
    <th style="padding:0px 10px;"><p style="font-weight:bold; text-align:center; font-size:14px;">Quantity</p></th>
    <th style="padding:0px 10px;"><p style="font-weight:bold; text-align:right; font-size:14px;">Price</p></th>
</tr>
<tr><td colspan="3" style="padding:5px;"></td></tr><tr style="border-top:solid 1px #CCC;"><td colspan="3" style="padding:5px;"></td></tr>
@foreach ($order->items as $i => $item)
<tr>
    <td style="padding:0px 10px; font-size:14px;">{{$item->productVariant->product->name}} [{{$item->productVariant->size_code}}]</td>
    <td style="padding:0px 10px; font-size:14px; text-align:center">{{$item->qty}}</td>
    <td style="padding:0px 10px; font-size:14px; text-align:right">Rp. {{number_format($prices[$i])}}</td>
</tr>
@endforeach

<tr><td colspan="3" style="padding:5px;"></td></tr><tr style="border-top:solid 1px #CCC;"><td colspan="3" style="padding:5px;"></td></tr>

<tr>
    <td style="padding:0px 10px; font-size:14px;">Subtotal</td>
    <td colspan="2" style="padding:0px 10px; font-size:14px;text-align:right">Rp. {{number_format($subtotal)}}</td>
</tr>

<tr><td colspan="3" style="padding:5px;"></td></tr><tr style="border-top:solid 1px #CCC;"><td colspan="3" style="padding:5px;"></td></tr>
@if ($order->member_discount !== 0)
<tr>
    <td style="padding:0px 10px; font-size:14px;">Diskon</td>
    <td colspan="2" style="padding:0px 10px; font-size:14px; text-align:right">Rp. {{number_format($order->member_discount)}}</td>
</tr>
@endif
<tr>
    <td style="padding:0px 10px; font-size:14px;">Courier Service</td>
    <td colspan="2" style="padding:0px 10px; font-size:14px;text-align:right">Rp. {{number_format($order->shipping_cost)}}</td>
</tr>

<tr><td colspan="3" style="padding:5px;"></td></tr><tr style="border-top:solid 1px #CCC;"><td colspan="3" style="padding:5px;"></td></tr>

<tr>
    <td style="padding:0px 10px; font-size:14px;">Total</td>
    <td colspan="2" style="padding:0px 10px; font-size:14px;text-align:right">Rp. {{number_format($total_order)}}</td>
</tr>

<tr>
    <td colspan="3" style="padding:5px;"></td>
</tr>
</table>

@endsection
