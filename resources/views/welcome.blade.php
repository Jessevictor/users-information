<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">


</head>

<body class="anti">
    <div class="Welcome">
        <h1>Welcome To Users_Info</h1>
        <p>Have You registerd ?? If Not Try It Now</p>
        @if (Route::has('login'))
        @auth
        <button onclick="window.location.href = 'http://127.0.0.1:8000/home';" class="btn1">Home</button>
        @else
        <button onclick="window.location.href = 'http://127.0.0.1:8000/login';" class="btn2">Login</button>
        @if (Route::has('register'))
        <button onclick="window.location.href = 'http://127.0.0.1:8000/register';" class="btn3">Register</button>
        @endif
        @endauth
    </div>
    @endif
    </div>
</body>

</html>