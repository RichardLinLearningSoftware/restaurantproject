<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Food</title>
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </head>
    <body>
        <header class="header">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('menu') }}">Menu</a>
        </header>

        <main class="home-main">
            @yield('content')
        </main>

        <footer class="footer">
            Copyright and stuff bruh
        </footer>
    </body>
</html>