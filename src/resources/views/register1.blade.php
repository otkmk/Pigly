@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{ ('css/register1.css' )}}">
@endsection

@section('content')


<div class="register">
    <div class="register-form">
        <h2 class="register-title">新規会員登録</h2>
        <p class="register-step">STEP1 アカウント情報の登録</p>
    </div>

    <form class="form" action="register/step1" method="POST">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <label for="name">お名前</label>
                <input type="text" id="name" name="name" placeholder="名前を入力">
            </div>
            <div class="form__error">
                @error('name')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <label for="password">パスワード</label>
                <input type="password" id="password" name="password">
            </div>
            <div class="form__error">
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__button">
                <button type="submit" class="form__button-submit">次に進む</button>
        </div>
    </form>
    <div class="login">
        <p class="login-link">
            <a href="{{ route('/login') }}">ログインはこちら</a>
        </p>
    </div>
</div>
@endsection
