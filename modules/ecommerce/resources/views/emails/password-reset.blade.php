@extends('ecommerce::emails.layouts.gantigol')

@section('content')

<p style="Margin:0;Margin-bottom:10px;color:#444;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:20px;padding:0;text-align:center">Anda baru saja melakukan permintaan untuk memuat ulang kata sandi anda. Silakan klik tombol dibawah ini untuk melanjutkan.</p>

<center>
<table style="min-width:40%;background-color:#c60000;padding:10px;margin-bottom:30px;"> <tbody><tr> <td align="center"> <a style="text-decoration:none;color:#FFF;" href="{{$reset_url}}">RESET PASSWORD</a> </td> </tr> </tbody></table>
</center>

@endsection
