<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>TaskMate</title>
</head>
<body>
<div class="wrapper">
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <h1>Вход в аккаунт</h1>
        <label>E-mail</label>
        <div class="input-box">
            <input type="email" name="email" placeholder="Введите ваш E-mail адрес" required>
            <i class='bx bx-envelope'></i>
        </div>
        <label>Пароль</label>
        <div class="input-box">
            <input type="password" name="password" placeholder="Введите пароль" required>
            <i class='bx bxs-key'></i>
        </div>
        <div class="reset-password">
            <a href="{{ route('password.request') }}">Восстановить пароль</a>
        </div>
        @error('email')
        <span class="error error--login">{{ $message }}</span>
        @enderror
        <button type="submit" class="btn">Войти</button>
        <div class="login-link">
            <p>Нет аккаунта? <a href="{{ route('register') }}">Создать аккаунт</a></p>
        </div>
    </form>
</div>
</body>
</html>
