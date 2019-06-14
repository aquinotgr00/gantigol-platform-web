@extends ('emails.layouts.without-menu')
@section ('content')
<table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;margin-bottom:40px;">
    <tbody>
        <tr style="padding: 0; text-align: left; vertical-align: top;">
            <td style="padding: 10px; background: #eaeaea; border: 1px #CCC solid;">
                <h4 style="font-size:18px; font-weight:bold; margin:0px">MOHON SEGERA SELESAIKAN PEMBAYARAN ANDA</h4>
                <p>Checkout berhasil pada {{$order->created_at->format('d M Y H:i')}}</p>
                <h3 style="font-size:14px; font-weight:bold; margin:0px">INVOICE: {{$order->invoice_id}}</h3>
                <p style="font-size:14px;margin-top:0px; font-weight:bold;">Total pembayaran : Rp. {{number_format($total_order + $order->admin_fee)}}</p>
                <p style="font-size:14px;margin-top:0px; font-weight:bold;">Batas waktu pembayaran : {{$order->created_at->addMinutes(config('starcross.transferBca.expired.amount'))->format('d M Y H:i')}}</p>
            </td>
        </tr>
    </tbody>
</table>


@endsection
