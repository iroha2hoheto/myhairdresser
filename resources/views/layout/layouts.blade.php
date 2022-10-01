<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'my hair dresser') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
    <body>
        <div id="app">
            @yield('stylesheet')
            <nav class="navbar">
                <div class="container">
                    <a class="titlebar" href="{{ url('/') }}"> my hair dresser </a>
                </div>
                <a href="/">ログイン</a>
            </nav>
            @yield('content')
        </div>
    </body>
</html>