@component('mail::message')
# Wiadomość potwierdzająca

Twój kod rezerwacji.
<?php
$user = Auth::user();
$name=$user->first_name;
$email=$user->email;
$code = Str::random(12);
$date = date('m/d/Y h:i:s a', time());
$qr =  QrCode::format('png')->size(250)->generate("
$code
$name
$email
$date");
?>
<body>
    <img src="data:image/png;base64, {{ base64_encode($qr) }} ">


Dziękujemy,<br>
{{ config('app.name') }}
</body>
@endcomponent
