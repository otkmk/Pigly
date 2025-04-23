<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pigly</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    @yield('css')
</head>

<body>
    <div class="register__whole">
        <link rel="stylesheet" href="{{ asset('css/commpn.css') }}">
        <div class="register__frame">
            <h1 class="register-log">PiGLy</h1>
        </div>
    </div>

    <main>
        @yield('content')
    </main>
</body>

</html>