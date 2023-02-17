@extends('layout')

@section('content')
    @if ($user->user_type == 'admin')
        <div class="container is-fluid">
            <div class="notification is-primary">
                This container is <strong>fluid</strong>: it will have a 32px gap on either side, on any
                viewport size.
            </div>
        </div>
    @elseif($user->user_type == 'brand')
    @else
    @endif

    <form method="POST" action="/logout">
        @csrf
        <button class="button is-danger" type="submit"><strong>Log Out</strong></button>

    </form>
@endsection
