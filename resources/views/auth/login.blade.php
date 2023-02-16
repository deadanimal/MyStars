@extends('layout')

@section('content')
<form action="/login" method="POST">
    @csrf
    <input type="email" name="email">
    <input type="password" name="password">
    <button type="submit">Login</button>
</form>
@endsection