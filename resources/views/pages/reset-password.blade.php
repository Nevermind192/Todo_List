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
    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{ request()->route('token') }}">
        <input type="hidden" name="email" value="{{ request('email') }}">

        <h1>Изменение пароля</h1>
        <label>Новый пароль</label>
        <div class="input-box">
            <input type="password" name="password" placeholder="Введите новый пароль" required>
            <i class='bx bxs-key'></i>
            @error('password')
            <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <label>Подтвержение пароля</label>
        <div class="input-box">
            <input type="password" name="password_confirmation" placeholder="Введите новый пароль повторно" required>
            <i class='bx bxs-key'></i>
            @error('password')
            <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn">Сохранить новый пароль</button>
    </form>
</div>
</body>
</html>
