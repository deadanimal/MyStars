<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Stars</title>

    @vite('resources/js/app.js')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body class="antialiased">

    <div class="bg-white">

        @if (Auth::user())
            @include('layouts.navbar-auth')
        @else
            @include('layouts.navbar-deauth')
        @endif

        @yield('content')

        @include('layouts.footer')
    </div>

</body>

</html>
