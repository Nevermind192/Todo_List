@extends('layouts.app')

@section('content')
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
@endsection
