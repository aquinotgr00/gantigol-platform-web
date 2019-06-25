@extends('ecommerce::emails.layouts.without-menu')
@section('content')
<table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;margin-bottom:40px;"><tbody><tr style="padding: 0; text-align: left; vertical-align: top;"><td style="padding: 10px; background: #eaeaea; border: 1px #CCC solid;">

<center>
<h3 style="text-align:center;font-size:18px; font-weight:bold; margin:0px">INVOICE: {{$order->invoice_id}}</h3>
<p style="text-align:center;font-size:14px;margin-top:0px; font-weight:bold;">Customer Name: {{$order->buyer_name}}</p>
<h4 style="font-size:18px; font-weight:bold; margin:0px">Payment Method: Transfer BCA</h4>
<h4 style="font-size:18px; font-weight:bold; margin:0px">Status: WAITING FOR PAYMENT</h4>
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
@if ($order->admin_fee>0)
<tr>
    <td style="padding:0px 10px; font-size:14px;">Payment Code</td>
    <td colspan="2" style="padding:0px 10px; font-size:14px; text-align:right">Rp. {{number_format($order->admin_fee)}}</td>
</tr>
<tr><td colspan="3" style="padding:5px;"></td></tr><tr style="border-top:solid 1px #CCC;"><td colspan="3" style="padding:5px;"></td></tr>
@endif
<tr>
    <td style="padding:0px 10px; font-size:14px;">Total</td>
    <td colspan="2" style="padding:0px 10px; font-size:14px;text-align:right">Rp. {{number_format($total_order + $order->admin_fee)}}</td>
</tr>

<tr>
    <td colspan="3" style="padding:5px;"></td>
</tr>
</table>

<div>Silakan melakukan pembayaran sesuai dengan jumlah <strong>Rp. {{number_format($total_order + $order->admin_fee)}}</strong></div>
<div>Batas waktu pembayaran anda hingga tanggal <strong>{{ $order->created_at->addMinutes(config('starcross.transferBca.expired.amount'))->format('d M Y H:i') }}</strong></div>
<p>
    Pesanan Anda segera diproses setelah melakukan pembayaran melalui nomor rekening resmi kami yang tertera di bawah ini
</p>
<div>
    <strong>BANK BCA</strong>
    <div>ACCOUNT NUMBER <strong>0379012649</strong></div>
    ACCOUNT NAME <strong>PT Lintas Bintang Mulia Nusantara</strong>
</div>

<p style="font-size:14px;margin:10px 20px 10px 0;">Harap upload bukti pembayaran dengan cara klik tombol di bawah ini</p>
<div style="text-align: center;margin-bottom:40px;">
<a style="display:inline-block;background-color:#ed3237; color:#fff; padding:20px 30px;text-decoration: none;" href="{{$payment_confirmation_link}}">Konfirmasi Pembayaran</a>
</div>


<table>
    <thead>
        <tr>
            <td><strong>Cara pembayaran via ATM BCA</strong></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <ol>
                    <li>Pada menu utama, pilih Transaksi Lainnya</li>
                    <li>Pilih Transfer</li>
                    <li>Masukkan total Nominal yang akan di bayarkan lalu tekan Benar</li>
                    <li>Masukkan nomor rekening Starcross atas nama PT. Lintas Bintang Mulia Nusantara lalu tekan Benar</li>
                    <li>Transaksi Anda selesai</li>
                </ol>
            </td>
        </tr>
    </tbody>
</table>

<table>
    <thead>
        <tr>
            <td><strong>Cara pembayaran via Klik BCA</strong></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <ol>
                    <li>Pilih menu Transfer Dana</li>
                    <li>Pilih Transfer ke BCA Account</li>
                    <li>Pilih nomor rekening yang akan digunakan untuk pembayaran</li>
                    <li>Jumlah yang akan ditransfer, nomor rekening dan nama merchant akan muncul di halaman konfirmasi pembayaran, jika informasi benar klik Lanjutkan</li>
                    <li>Masukkan respon KEYBCA APPLI 1 yang muncul pada Token BCA Anda, lalu klik tombol Kirim</li>
                    <li>Transaksi Anda selesai</li>
                </ol>
            </td>
        </tr>
    </tbody>
</table>

<table>
    <thead>
        <tr>
            <td><strong>Cara pembayaran via ATM BCA</strong></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <ol>
                    <li>Pada menu utama, pilih Transaksi Lainnya</li>
                    <li>Pilih Transfer</li>
                    <li>Masukkan total Nominal yang akan di bayarkan lalu tekan Benar</li>
                    <li>Masukkan nomor rekening Starcross atas nama PT. Lintas Bintang Mulia Nusantara lalu tekan Benar</li>
                    <li>Transaksi Anda selesai</li>
                </ol>
            </td>
        </tr>
    </tbody>
</table>
@endsection
