@extends('layouts.app')

@section('content')
<header class="py-10 ">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mt-3">
        <h1 class="text-3xl font-bold tracking-tight">Dashboard</h1>
    </div>
</header>


<main>

    $suggestion_challenges
    @foreach($suggestion_challenges as $challenge)
    @endforeach

    $recent_challenges
    @foreach($recent_challenges as $challenge)
    @endforeach
    
</main>

@endsection
