@extends ('emails.layouts.without-menu')
@section ('content')
<table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;margin-bottom:40px;">
    <tbody>
        <tr style="padding: 0; text-align: left; vertical-align: top;">
            <td style="padding: 10px; background: #eaeaea; border: 1px #CCC solid;">
                <h3 style="font-size:18px; font-weight:bold; margin:0px">Nomor Invoice: {{$order->invoice_id}}</h3>
                <p style="font-size:14px;margin-top:0px; font-weight:bold;">Pengiriman: {{$order->shipment_name}}</p>
                <p style="font-size:14px;margin-top:0px; font-weight:bold;">Nomer resi: {{$order->shipping_tracking_number}}</p>
            </td>
        </tr>
    </tbody>
</table>

<table class="row" style="margin-top:30px; margin-bottom:50px;border: 1px #CCC solid; border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
    <tr>
        <th style="padding:0px 10px;"><p style="font-weight:bold; font-size:14px;">Item</p></th>
        <th style="padding:0px 10px;"><p style="font-weight:bold; text-align:center; font-size:14px;">Quantity</p></th>
    </tr>
    <tr><td colspan="3" style="padding:5px;"></td></tr>
    <tr style="border-top:solid 1px #CCC;"><td colspan="3" style="padding:5px;"></td></tr>
    @foreach ($order->items as $i => $item)
    <tr>
        <td style="padding:0px 10px; font-size:14px;">{{$item->productVariant->product->name}} [{{$item->productVariant->size_code}}]</td>
        <td style="padding:0px 10px; font-size:14px; text-align:center">{{$item->qty}}</td>
    </tr>
    @endforeach

    <tr><td colspan="3" style="padding:5px;"></td></tr>
    <tr style="border-top:solid 1px #CCC;"><td colspan="3" style="padding:5px;"></td></tr>

    <tr>
        <td colspan="3" style="padding:5px;"></td>
    </tr>
</table>

@endsection
