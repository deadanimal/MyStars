<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Stars</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    <link rel="stylesheet" href="/main.css">

</head>

<body>

    @include('sweetalert::alert')


    <nav class="navbar is-transparent" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <img src="/logo.png">
                My Stars
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">

                @if (Auth::guest())
                    <a class="navbar-item" href="/about">
                        About
                    </a>
                @elseif(Auth::user()->user_type == 'brand')
                    <a class="navbar-item" href="/campaigns">
                        Campaign
                    </a>
                @elseif(Auth::user()->user_type == 'creator')
                    <a class="navbar-item" href="/campaigns">
                        Campaign
                    </a>

                    <a class="navbar-item" href="/contents">
                        Content
                    </a>                    

                    {{-- <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            <span class="icon has-text-primary ">
                                <i class="fa-solid fa-wand-magic-sparkles"></i>
                            </span>
                            <span>
                                Action
                            </span>
                        </a>

                        <div class="navbar-dropdown">
                            @if (Auth::user()->user_type == 'creator')
                                <a class="navbar-item" href="/briefs">
                                    Explore active briefs
                                </a>

                                <a class="navbar-item" href="/posts">
                                    View all of my posts
                                </a>
                            @endif

                            @if (Auth::user()->user_type == 'brand')
                                <a class="navbar-item" href="/briefs">
                                    List of my briefs
                                </a>

                                <a class="navbar-item" href="/briefs/create">
                                    Create a new brief
                                </a>
                            @endif
                        </div>
                    </div> --}}
                @endif



            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        @if (Auth::guest())
                            <a class="button is-info" href="/dashboard">
                                <strong>Dashboard</strong>
                            </a>
                        @elseif(Auth::user()->user_type == 'brand')
                            <a class="button is-primary" href="/campaigns">
                                <strong>Create Campaign</strong>
                            </a>
                        @elseif(Auth::user()->user_type == 'creator')
                            <a class="button is-primary" href="/campaigns">
                                <strong>Explore Campaign</strong>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')


    <footer class="footer">
        <div class="content has-text-centered">
            <p>
                <strong>My Stars</strong> is developed with &#10084; by <a href="https://dcb.my">DCB Platform Ltd.</a>
            </p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // Get all "navbar-burger" elements
            const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

            // Add a click event on each of them
            $navbarBurgers.forEach(el => {
                el.addEventListener('click', () => {

                    // Get the target from the "data-target" attribute
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);

                    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');

                });
            });

        });
    </script>

</body>

</html>
