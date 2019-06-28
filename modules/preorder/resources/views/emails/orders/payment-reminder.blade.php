@extends('preorder::emails.layouts.gantigol')

@section('content')
<table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
    <tbody>
        <tr style="padding:0;text-align:left;vertical-align:top">
            <th style="Margin:0;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;padding:0;text-align:left">
                <table class="spacer" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                    <tbody>
                        <tr style="padding:0;text-align:left;vertical-align:top">
                            <td height="32px" style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:32px;font-weight:400;hyphens:auto;line-height:32px;margin:0;mso-line-height-rule:exactly;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">&nbsp;</td>
                        </tr>
                    </tbody>
                </table>

                <table class="spacer" style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%">
                    <tbody>
                        <tr style="padding:0;text-align:left;vertical-align:top">
                            <td height="16px" style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:16px;margin:0;mso-line-height-rule:exactly;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
            </th>
        </tr>
        <tr>
            <td colspan="2" style="padding-top: 0px; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; color: #000000; font-family: 'Postmates Std', 'Helvetica', -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif; font-size: 20px; font-smoothing: always; font-style: normal; font-weight: 600; letter-spacing: -0.5px; line-height: 52px; mso-line-height-rule: exactly; text-decoration: none;">
                MOHON SEGERA SELESAIKAN PEMBAYARAN ANDA
                <p style="font-size:20px;margin-top:0px ; font-weight: 400; line-height: 1.3">Checkout berhasil pada {{ date_format($transaction->created_at, "j F Y h:m") }}</p>
            </td>
        </tr>
        <tr>
            <td style="padding-top: 10px; padding-bottom: 48px;">
                <table cellpadding="0" cellspacing="0" style="width: 100%">
                    <tbody>
                        <tr>
                            <td style="width: 100%; height: 1px; max-height: 1px; background-color: #d9dbe0; opacity: 0.81"></td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
<table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;margin-bottom:40px;">
    <tbody>
        <tr style="padding: 0; text-align: left; vertical-align: top;">
            <td style="padding: 10px; background: #eaeaea; border: 1px #CCC solid;">

                <center>

                </center>

                <h4 style="font-size:18px;font-weight:bold;margin:0px"></h4>
                <p></p>
                <h3 style="font-size:14px;font-weight:bold;margin:0px">INVOICE: {{ $transaction->invoice }}</h3>
                <p style="font-size:14px;margin-top:0px;font-weight:bold">Total pembayaran : Rp. {{ number_format($transaction->amount) }}</p>
                @php
                $payment_duedate = date('Y-m-d');
                if(!is_null($transaction->payment_duedate)){
                    $payment_duedate = date_format(date_create($transaction->payment_duedate), "j F Y h:m");
                }
                @endphp
                <p style="font-size:14px;margin-top:0px;font-weight:bold">Batas waktu pembayaran : {{ $payment_duedate }}</p>
                <table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                    <tbody>


                    </tbody>
                    <tbody>
                        <tr style="padding:0;text-align:left;vertical-align:top">
                        </tr>
                    </tbody>
                </table>
            </td>
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
                                <a data-click-track-id="1053" href="https://twitter.com/gantigol" style="font-weight: 500; color: #000" target="_blank">Help Center</a>.
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