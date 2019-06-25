@extends('preorder::emails.layouts.gantigol')

@section('content')
<table class="row" style="border-collapse:collapse;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%">
    <tbody>
        <tr style="padding:0;text-align:left;vertical-align:top">
            <th class="small-12 large-12 columns first last" style="Margin:0 auto;color:#0a0a0a;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0 auto;padding:0;padding-bottom:16px;padding-left:16px;padding-right:16px;text-align:left;width:564px">
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
                            <td colspan="2" style="padding-top: 0px; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; color: #000000; font-family: 'Postmates Std', 'Helvetica', -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif; font-size: 28px; font-smoothing: always; font-style: normal; font-weight: 600; letter-spacing: -0.5px; line-height: 52px; mso-line-height-rule: exactly; text-decoration: none;">
                                INVOICE: {{ $invoice['invoice'] }}
                                <p style="font-size:20px;margin-top:0px ; font-weight: 400; line-height: 1.3">Nama: {{ $invoice['billing_name'] }}</p>
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

                                <table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                    <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">

                                            <th class="small-12 large-6 columns first" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-weight: 400; line-height: 1.3; margin: 0 auto; padding: 0; padding-left: 0 !important; padding-right: 0 !important; text-align: left; width: 50%;">
                                                <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                    <tbody>
                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                            <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-weight: 400; line-height: 1.3; margin: 0; padding: 0; text-align: left;">

                                                                <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-weight: 400; line-height: 1.3; margin: 0; margin-top:10px;margin-bottom: 10px; padding: 0; text-align: center;">
                                                                    <strong>Billing Name</strong><br> {{ $invoice['billing_name'] }}
                                                                </p>

                                                                <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-weight: 400; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align:center;">
                                                                    <strong>Billing Address</strong><br>{{ $invoice['billing_address'] }}
                                                                </p>

                                                                <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-weight: 400; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align:center;">
                                                                    <strong>Billing Phone</strong><br> {{ $invoice['billing_phone'] }}</p>

                                                                <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-weight: 400; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: center;">
                                                                    <strong>Billing Contact</strong><br> {{ $invoice['billing_phone'] }}
                                                                </p>

                                                            </th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </th>

                                            <th class="small-12 large-6 columns last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-weight: 400; line-height: 1.3; margin: 0 auto; padding: 0; padding-left: 0 !important; padding-right: 0 !important; text-align: left; width: 50%;">
                                                <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                    <tbody>
                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                            <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-weight: 400; line-height: 1.3; margin: 0; padding: 0; text-align: left;">

                                                                <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-weight: 400; line-height: 1.3; margin: 0; margin-top:10px;margin-bottom: 10px; padding: 0; text-align: center;">
                                                                    <strong>Shipping Name</strong><br> {{ $invoice['shipping_name'] }}
                                                                </p>

                                                                <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-weight: 400; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: center;">
                                                                    <strong>Shipping Address</strong><br>{{ $invoice['shipping_address'] }}
                                                                </p>

                                                                <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-weight: 400; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align:center;">
                                                                    <strong>Shipping Contact</strong><br> {{ $invoice['shipping_phone'] }}</p>


                                                                <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-weight: 400; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: center;">
                                                                    <strong>Shipping Courier</strong><br> {{ $invoice['shipping_courier'] }}
                                                                </p>

                                                            </th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </th>

                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <table class="row" style="margin-top:30px; margin-bottom:50px;border: 1px #CCC solid; border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                    <tbody>
                        <tr>
                            <th style="padding:0px 10px;">
                                <p style="font-weight:bold; font-size:14px;">Item</p>
                            </th>
                            <th style="padding:0px 10px;">
                                <p style="font-weight:bold; text-align:center; font-size:14px;">Quantity</p>
                            </th>
                            <th style="padding:0px 10px;">
                                <p style="font-weight:bold; text-align:right; font-size:14px;">Price</p>
                            </th>
                        </tr>
                        <tr>
                            <td colspan="3" style="padding:5px;"></td>
                        </tr>
                        <tr style="border-top:solid 1px #CCC;">
                            <td colspan="3" style="padding:5px;"></td>
                        </tr>
                        @foreach($invoice['orders'] as $key => $value)
                        <tr>
                            <td style="padding:0px 10px; font-size:14px;">
                            {{ $value->productVariant->name }}
                            </td>
                            <td style="padding:0px 10px; font-size:14px; text-align:center">
                            {{ $value->qty }}
                            </td>
                            <td style="padding:0px 10px; font-size:14px; text-align:right">
                            Rp. {{ $value->subtotal }}
                        </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="3" style="padding:5px;"></td>
                        </tr>
                        <tr style="border-top:solid 1px #CCC;">
                            <td colspan="3" style="padding:5px;"></td>
                        </tr>

                        <tr>
                            <td style="padding:0px 10px; font-size:14px;">Subtotal</td>
                            <td colspan="2" style="padding:0px 10px; font-size:14px;text-align:right">Rp. {{ number_format($invoice['net_total']) }}</td>
                        </tr>

                        <tr>
                            <td colspan="3" style="padding:5px;"></td>
                        </tr>
                        <tr style="border-top:solid 1px #CCC;">
                            <td colspan="3" style="padding:5px;"></td>
                        </tr>
                        <tr>
                            <td style="padding:0px 10px; font-size:14px;">Courier Service</td>
                            <td colspan="2" style="padding:0px 10px; font-size:14px;text-align:right">Rp. {{ number_format($invoice['shipping_cost']) }}</td>
                        </tr>

                        <tr>
                            <td colspan="3" style="padding:5px;"></td>
                        </tr>
                        <tr style="border-top:solid 1px #CCC;">
                            <td colspan="3" style="padding:5px;"></td>
                        </tr>

                        <tr>
                            <td style="padding:0px 10px; font-size:14px;">Total</td>
                            <td colspan="2" style="padding:0px 10px; font-size:14px;text-align:right">Rp. {{ number_format($invoice['gross_total']) }}</td>
                        </tr>
                    </tbody>
                </table>
                <table align="center" cellpadding="0" cellspacing="0" id="footer" style="background-color: #E8E8E8; width: 100%; max-width: 680px; height: 100%;">
                    <tbody>
                        <tr>
                            <td>
                                <table align="center" cellpadding="0" cellspacing="0" class="footer-center" style="text-align: left; width: 100%; padding-left: 120px; padding-right: 120px;">
                                    <tbody>
                                        <tr>
                                            <td colspan="2" style="padding-top: 24px; padding-bottom: 48px;">
                                                <table cellpadding="0" cellspacing="0" style="width: 100%">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width: 100%; height: 1px; max-height: 1px; background-color: transparent; opacity: 0.19"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="-ms-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; color: #000; font-family: 'Postmates Std', 'Helvetica', -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif; font-size: 15px; font-smoothing: always; font-style: normal; font-weight: 400; letter-spacing: 0; line-height: 24px; mso-line-height-rule: exactly; text-decoration: none; vertical-align: top; width: 100%;">
                                                Jika Anda mengalami masalah terkait informasi di email ini,
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

            </th>
        </tr>
    </tbody>
</table>
@endsection