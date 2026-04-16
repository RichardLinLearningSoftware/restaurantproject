@extends('layout.index')

@section('content')

    <h2>Contact Us</h2>

    <form method="POST" action="/reviews">
        @csrf

        <input type="text" name="name" placeholder="Your name" value="{{ old('name') }}">
        @error('name') <p>{{ $message }}</p> @enderror

        <input type="email" name="email" placeholder="Your email" value="{{ old('email') }}">
        @error('email') <p>{{ $message }}</p> @enderror

        <textarea name="message" placeholder="Your message">{{ old('message') }}</textarea>
        @error('message') <p>{{ $message }}</p> @enderror

        <button type="submit">Send</button>
    </form>

@endsection