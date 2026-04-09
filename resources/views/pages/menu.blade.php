@extends('layout.index')

@section('content')

    <h2>Menu</h2>
    <main class="menu-main">
        @foreach ($menuus as $menu)
            <div class="menu-item">
                <h3>{{ $menu->name }}</h3>
                <p>{{ $menu->description }}</p>
                <p>€{{ $menu->price }}</p>
            </div>
        @endforeach
    </main>
    
@endsection