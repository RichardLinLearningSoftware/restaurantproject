@extends('layout.index')

@section('content')
    <form method="POST" action="/menus" class="input-field">
        @csrf

        <input type="text" name="name" placeholder="Name">
        <textarea name="description" placeholder="Description"></textarea>
        <input type="number" step="0.01" name="price" placeholder="Price">

        <button type="submit">Add Menu Item</button>
    </form>
@endsection