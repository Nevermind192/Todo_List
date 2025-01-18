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
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <form action="" method="POST">
            @csrf
            <h1>Регистрация</h1>
            <div class="input-box">
                <input type="email" name="email" placeholder="E-mail" required>
                <i class='bx bx-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Пароль" required>
                <i class='bx bxs-key'></i>
            </div>
            <button type="submit" class="btn">Зарегистрироваться</button>
            <div class="login-link">
                <p>Уже есть аккаунт? <a href="#">Войти</a></p>
            </div>
        </form>
    </div>
</body>
</html>
