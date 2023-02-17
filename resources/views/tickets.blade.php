@extends('layout')

@section('content')

@if($user->user_type == 'admin') 

@elseif($user->user_type == 'brand') 

@else

@endif

@endsection