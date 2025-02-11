@extends('layouts.app')

@section('content')
    <div class="wrapper wrapper--reset-notice">
        <div class="img-container">
            <img src="{{ asset('images/email.png') }}" alt="Email">
        </div>
        <h1>Письмо отправлено!</h1>
        <p>Если учетная запись с таким email существует, инструкции по сбросу пароля будут отправлены в течение 5 минут.</p><br>
        <p>Не получили письмо? Проверьте папку "Спам" или убедитесь, что адрес введен правильно, и <b>попробуйте снова</b></p>
    </div>
@endsection
