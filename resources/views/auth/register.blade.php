@extends('layout')

@section('content')
<form action="/register" method="POST">
    @csrf
    <input type="text" name="name">
    <input type="email" name="email">
    <input type="password" name="password">
    <input type="password" name="password_confirmation">
    <button type="submit">Register</button>
</form>
@endsection