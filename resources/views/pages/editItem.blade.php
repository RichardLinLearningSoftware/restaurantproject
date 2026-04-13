@extends('layout.index')

@section('content')

<h2>Edit Menu Item</h2>

<form method="POST" action="{{ route('menus.update', $menu->id) }}">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $menu->name }}">
    <textarea name="description">{{ $menu->description }}</textarea>
    <input type="number" step="0.01" name="price" value="{{ $menu->price }}">

    <button type="update">Update</button>
</form>

@endsection