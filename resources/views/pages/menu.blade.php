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
                        <a href="{{ route('menus.edit', $menu->id) }}">
                            <p class="auth-link">
                                Edit button
                            </p>
                        </a>

                        <form method="POST" action="{{ route('menus.destroy', $menu->id) }}">
                            @csrf
                            @method('DELETE')

                            <button type="submit">Delete</button>
                        </form>
                    @endif
                @endauth
            </div>
        @endforeach
    </main>
    
@endsection