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
            @auth
                @if(auth()->user()->name === 'adminAcount')
                    <a href="{{ route('createItem') }}">Create item</a>
                @endif
            @endauth

            @guest
                <a href="{{ route('login') }}">Log in</a>
                <a href="{{ route('register') }}"> Register</a>
            @endguest

            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @endauth
        </header>

        <main class="home-main">
            @auth
                <p>You are logged in as {{ auth()->user()->name }}</p>
            @endauth
            @guest
                <p>You are NOT logged in</p>
            @endguest
            @yield('content')
        </main>

        <footer class="footer">
            Copyright and stuff bruh
        </footer>
    </body>
</html>