@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{ ('css/register2.css' )}}">
@endsection

@section('content')
< class="register">
    <div class="register-form">
        <h2 class="register-title">新規会員登録</h2>
        <p class="register-step">STEP1 アカウント情報の登録</p>
    </div>

    <form class="form" action="register/step2" method="POST">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <label for="now">現在の体重</label>
                <input type="number" id="now" name="now" placeholder="現在の体重を入力">kg
            </div>
            <div class="form__error">
                @error('now')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <label for="goal">目標の体重</label>
                <input type="goal" id="goal" name="goal">kg
            </div>
            <div class="form__error">
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__button">
                <button type="submit" class="form__button-submit">アカウント作成</button>
        </div>
    </form>
</div>
@endsection
