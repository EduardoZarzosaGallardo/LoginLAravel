<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>

<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#">e-commerce</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    </ul>

    <div class="d-inline-flex  my-2 my-lg-0">
        @if (Route::has('login'))
            @auth
                <a class="nav-link" href="{{ url('/home') }}">Inicio</a>
            @else
                <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>

                @if (Route::has('register'))
                    <a class="nav-link btn-success" style="border-radius: 20px;" href="{{ route('register') }}">Registrarse</a>
                @endif
            @endauth
        @endif
    </div>
</nav>

<style>
    html, body {
        background-color: #fff;
        height: 100vh;
        margin: 0;
    }
    .content {
        text-align: center;
    }
    .title {
        font-size: 84px;
    }
    .m-b-md {
        margin-top: 200px;
    }
</style>

<div class="content">
    <div class="title m-b-md">
        <h1>¡Bienvenido!</h1>
    </div>
</div>


<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
