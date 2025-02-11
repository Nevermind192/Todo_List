@extends('layouts.app')

@section('content')
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
@endsection
