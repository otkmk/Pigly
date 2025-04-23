@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{ ('css/login.css' )}}">
@endsection

@section('content')
< class="register">
    <div class="register-form">
        <h2 class="register-title">ログイン</h2>
    </div>

    <form class="form" action="login" method="POST">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <label for="email">メールアドレス</label>
                <input type="email" id="email" name="email" placeholder="メールアドレスを入力">
            </div>
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <label for="password">パスワードを入力してください</label>
                <input type="password" id="password" name="password">kg
            </div>
            <div class="form__error">
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__button">
                <button type="submit" class="form__button-submit">ログイン</button>
        </div>
    </form>
    <div class="login">
        <p class="login-link">
            <a href="{{ route('/register/step1') }}">ログインはこちら</a>
        </p>
    </div>
</div>
@endsection
