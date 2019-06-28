@extends('ecommerce::emails.layouts.gantigol')

@section('content')

<h4 style="Margin:0;Margin-bottom:10px;color:inherit;font-family:Helvetica,Arial,sans-serif;color:#444;font-size:16px;font-weight:400;line-height:1.3;margin:0;margin-bottom:10px;padding:0;word-wrap:normal;text-align:center;">Hi {{$name}}, Selamat Bergabung di Starcross.</h4>

<p style="Margin:0;Margin-bottom:10px;color:#444;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:1.3;margin:40px;padding:0;text-align:center">
<br>Anda baru saja mendaftarkan email: <u>{{$email}}</u>.<br>Selanjutnya, klik tombol dibawah untuk melakukan verifikasi.</p>

<center>
<table style="min-width:40%;background-color:#c60000;padding:10px;margin-bottom:30px;"> <tbody><tr> <td align="center"> <a style="text-decoration:none;color:#FFF;" href="{{$token_url}}">VERIFIKASI EMAIL</a> </td> </tr> </tbody></table>
</center>

@endsection
