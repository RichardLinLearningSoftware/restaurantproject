@extends('layout.index')

@section('content')
    <h2>Reviews</h2>
    <main class="menu-main">
        @foreach ($contacts as $contact)
            <div class="menu-item">
                <h3>{{ $contact->name }}</h3>
                <p>{{ $contact->email }}</p>
                <p>{{ $contact->message }}</p>
            </div>
        @endforeach
    </main>
    
@endsection