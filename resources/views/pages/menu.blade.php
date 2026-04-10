@extends('layout.index')

@section('content')
    <h2>Menu</h2>
    <main class="menu-main">
        @foreach ($menus as $menu)
            <div class="menu-item">
                <h3>{{ $menu->name }}</h3>
                <p>{{ $menu->description }}</p>
                <p>€{{ $menu->price }}</p>

                <!-- Edit button -->
                @auth
                    @if(auth()->user()->name === 'adminAcount')
                        <a class="auth-link" href="">test link</a>
                    @endif
                @endauth
            </div>
        @endforeach
    </main>
    
@endsection