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
    <div class="wrapper wrapper--forgot-password">
        <form action="{{ route('password.email') }}" method="POST">
            @csrf
            <h1>Восстановление пароля</h1>
            <div class="forgot-pass">
                <p>Введите адрес электронной почты связанный с вашей учетной записью, и мы вышлем вам ссылку для восстановления пароля</p>
            </div>
            <label>E-mail</label>
            <div class="input-box">
                <input type="email" name="email" placeholder="Введите ваш E-mail адрес" required>
                <i class='bx bx-envelope'></i>
                @error('email')
                <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn">Отправить ссылку</button>
        </form>
    </div>
</body>
</html>
