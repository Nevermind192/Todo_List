@extends('layouts.app')

@section('content')
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
@endsection
