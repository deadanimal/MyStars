@extends('layout')

@section('content')
<form action="/register" method="POST">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <input type="password" name="password">
    <input type="password" name="password_confirmation">
    <button type="submit">Reset Password</button>
</form>
@endsection