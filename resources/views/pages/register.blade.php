@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <h1>Регистрация</h1>
            <label>E-mail</label>
            <div class="input-box">
                <input type="email" name="email" placeholder="Введите ваш E-mail адрес" required>
                <i class='bx bx-envelope'></i>
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <label>Пароль</label>
            <div class="input-box">
                <input type="password" name="password" placeholder="Введите пароль" required>
                <i class='bx bxs-key'></i>
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn">Зарегистрироваться</button>
            <div class="login-link">
                <p>Уже есть аккаунт? <a href="{{ route('login') }}">Войти</a></p>
            </div>
        </form>
    </div>
@endsection
