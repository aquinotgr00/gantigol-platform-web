@extends('ecommerce::emails.layouts.gantigol')
@section('content')
<table class="row"
    style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;margin-bottom:40px;">
    <tbody>
        <tr style="padding: 0; text-align: left; vertical-align: top;">
            <td style="padding: 10px; background: #eaeaea; border: 1px #CCC solid;">
                <h4 style="font-size:18px; font-weight:bold; margin:0px">MOHON SEGERA SELESAIKAN PEMBAYARAN ANDA</h4>
                <p>Checkout berhasil pada {{ $order->created_at->format('d M Y H:i') }}</p>
                <h3 style="font-size:14px; font-weight:bold; margin:0px">INVOICE: {{$order->invoice_id}}</h3>
                <p style="font-size:14px;margin-top:0px; font-weight:bold;">Total pembayaran : Rp.
                    {{ number_format($total_order) }}</p>
                <p style="font-size:14px;margin-top:0px; font-weight:bold;">Batas waktu pembayaran :
                    {{ $order->created_at->addMinutes(config('ecommerce.transferBca.expired.amount'))->format('d M Y H:i') }}
                </p>
            </td>
        </tr>
    </tbody>
</table>
<table align="center" cellpadding="0" cellspacing="0" id="footer"
    style="background-color: #E8E8E8; width: 100%; max-width: 680px; height: 100%;">
    <tbody>
        <tr>
            <td>
                <table align="center" cellpadding="0" cellspacing="0" class="footer-center"
                    style="text-align: left; width: 100%; padding-left: 120px; padding-right: 120px;">
                    <tbody>
                        <tr>
                            <td colspan="2" style="padding-top: 24px; padding-bottom: 48px;">
                                <table cellpadding="0" cellspacing="0" style="width: 100%">
                                    <tbody>
                                        <tr>
                                            <td
                                                style="width: 100%; height: 1px; max-height: 1px; background-color: transparent; opacity: 0.19">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td
                                style="-ms-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; color: #000; font-family: 'Postmates Std', 'Helvetica', -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif; font-size: 15px; font-smoothing: always; font-style: normal; font-weight: 400; letter-spacing: 0; line-height: 24px; mso-line-height-rule: exactly; text-decoration: none; vertical-align: top; width: 100%;">
                                Jika Anda mengalami masalah terkait informasi di email ini,
                                <br>
                                <a data-click-track-id="1053" href="https://twitter.com/gantigol"
                                    style="font-weight: 500; color: #000" target="_blank">Help Center</a>.
                            </td>
                        </tr>
                        <tr>
                            <td style="height: 72px;"></td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>

@endsection