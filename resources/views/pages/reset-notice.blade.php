<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>TaskMate</title>
</head>
<body>
    <div class="wrapper wrapper--reset-notice">
        <div class="img-container">
            <img src="{{ asset('images/email.png') }}" alt="Email">
        </div>
        <h1>Письмо отправлено!</h1>
        <p>Если учетная запись с таким email существует, инструкции по сбросу пароля будут отправлены в течение 5 минут.</p><br>
        <p>Не получили письмо? Проверьте папку "Спам" или убедитесь, что адрес введен правильно, и <b>попробуйте снова</b></p>
    </div>
</body>
</html>
