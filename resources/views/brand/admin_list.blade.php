@extends('layouts.app')

@section('content')
    <header class="py-10 ">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mt-3">
            <h1 class="text-3xl font-bold tracking-tight">List of Brands</h1>
        </div>
    </header>


    <main class="-mt-32">
        @forelse($brands as $brand)
            {{ $brand }} <br />
        @empty
            -
        @endforelse
    </main>
@endsection
