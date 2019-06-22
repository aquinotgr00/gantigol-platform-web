@extends('preorder::emails.layouts.gantigol')

@section('content')
<tr style="padding:0;text-align:left;vertical-align:top">
    <td style="padding:10px;background:#fff;border:0px #ccc solid">
        <h3 style="font-size:18px;font-weight:bold;margin:0px">Nomor
            Invoice: {{ $transaction->invoice }}
        </h3>
        <p style="font-size:14px;margin-top:0px;font-weight:bold">
            Pengiriman: JNE LAYANAN REGULER
            (1-2 HARI)</p>
        <p style="font-size:14px;margin-top:0px;font-weight:bold">Nomer
            resi: {{ $transaction->getProduction->tracking_number  }}</p>
    </td>
</tr>

<table class="row" style="margin-top:30px; margin-bottom:50px;border: 1px #CCC solid; border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
    <tbody>
        <tr>
            <th style="padding:0px 10px;">
                <p style="font-weight:bold; font-size:14px;">Item</p>
            </th>
            <th style="padding:0px 10px;">
                <p style="font-weight:bold; text-align:center; font-size:14px;">
                    Quantity</p>
            </th>
            <th style="padding:0px 10px;">
                <p style="font-weight:bold; text-align:right; font-size:14px;">
                    Price</p>
            </th>
        </tr>
        <tr>
            <td colspan="3" style="padding:5px;"></td>
        </tr>
        <tr style="border-top:solid 1px #CCC;">
            <td colspan="3" style="padding:5px;"></td>
        </tr>
        @foreach($transaction->orders as $key => $value)
        <tr>
            <td style="padding:0px 10px; font-size:14px;">
                {{ $value->productVariant->name }}
            </td>
            <td style="padding:0px 10px; font-size:14px; text-align:center">
                {{ $value->qty }}
            </td>
            <td style="padding:0px 10px; font-size:14px; text-align:right">
                {{ $value->price }}
            </td>
        </tr>
        @endforeach
        <tr>
            <td colspan="3" style="padding:5px;"></td>
        </tr>
        <tr style="border-top:solid 0px #CCC;">
            <td colspan="3" style="padding:0px;"></td>
        </tr>

    </tbody>
</table>
<table align="center" cellpadding="0" cellspacing="0" id="footer" style="background-color: #E8E8E8; width: 100%; max-width: 680px; height: 100%;">
    <tbody>
        <tr>
            <td>
                <table align="center" cellpadding="0" cellspacing="0" class="footer-center" style="text-align: left; ">
                    <tbody>
                        <tr>
                            <td colspan="2" style="padding-top: 24px; padding-bottom: 48px;">
                                <table cellpadding="0" cellspacing="0" style="width: 100%">
                                    <tbody>
                                        <tr>
                                            <td style="width: 100%; height: 1px; max-height: 1px; background-color: transparent; opacity: 0.19">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="-ms-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; color: #000; font-family: 'Postmates Std', 'Helvetica', -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif; font-size: 15px; font-smoothing: always; font-style: normal; font-weight: 400; letter-spacing: 0; line-height: 24px; mso-line-height-rule: exactly; text-decoration: none; vertical-align: top; width: 100%;">
                                Jika Anda mengalami masalah terkait
                                informasi di email ini,
                                <br>
                                <a data-click-track-id="1053" href="https://support.postmates.com/buyer" style="font-weight: 500; color: #000" target="_blank">Help Center</a>.
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