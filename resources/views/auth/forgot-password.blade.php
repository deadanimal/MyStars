@extends('layout')

@section('content')
<form action="/forgot-password" method="POST">
    @csrf
    <input type="email" name="email">
    <button type="submit">Forgot Password</button>
</form>
@endsection

