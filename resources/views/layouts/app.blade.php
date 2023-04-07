<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>My Stars</title>

    <meta name="description" content="Around - Multipurpose Bootstrap HTML Template">
    <meta name="keywords"
        content="bootstrap, business, corporate, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, saas, multipurpose, product landing, shop, software, ui kit, web studio, landing, dark mode, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/assets/favicon/site.webmanifest">
    <link rel="mask-icon" color="#6366f1" href="/assets/favicon/safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#080032">
    <meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="white">

    <script>
        let mode = window.localStorage.getItem('mode'),
            root = document.getElementsByTagName('html')[0];
        if (mode !== undefined && mode === 'dark') {
            root.classList.add('dark-mode');
        } else {
            root.classList.remove('dark-mode');
        }
    </script>
    <!-- Page loading styles-->
    <style>
        .page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all .4s .2s ease-in-out;
            transition: all .4s .2s ease-in-out;
            background-color: #fff;
            opacity: 0;
            visibility: hidden;
            z-index: 9999;
        }

        .dark-mode .page-loading {
            background-color: #121519;
        }

        .page-loading.active {
            opacity: 1;
            visibility: visible;
        }

        .page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: opacity .2s ease-in-out;
            transition: opacity .2s ease-in-out;
            opacity: 0;
        }

        .page-loading.active>.page-loading-inner {
            opacity: 1;
        }

        .page-loading-inner>span {
            display: block;
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: normal;
            color: #6f788b;
        }

        .dark-mode .page-loading-inner>span {
            color: #fff;
            opacity: .6;
        }

        .page-spinner {
            display: inline-block;
            width: 2.75rem;
            height: 2.75rem;
            margin-bottom: .75rem;
            vertical-align: text-bottom;
            background-color: #d7dde2;
            border-radius: 50%;
            opacity: 0;
            -webkit-animation: spinner .75s linear infinite;
            animation: spinner .75s linear infinite;
        }

        .dark-mode .page-spinner {
            background-color: rgba(255, 255, 255, .25);
        }

        @-webkit-keyframes spinner {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            50% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes spinner {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            50% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }
    </style>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" id="google-font">
    <!-- Vendor styles-->
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="/assets/css/theme.min.css">

    <!-- Matomo -->
    <script>
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u = "https://stars.matomo.cloud/";
            _paq.push(['setTrackerUrl', u + 'matomo.php']);
            _paq.push(['setSiteId', '1']);
            var d = document,
                g = d.createElement('script'),
                s = d.getElementsByTagName('script')[0];
            g.async = true;
            g.src = '//cdn.matomo.cloud/stars.matomo.cloud/matomo.js';
            s.parentNode.insertBefore(g, s);
        })();
    </script>
    <!-- End Matomo Code -->

</head>
<!-- Body-->

<body class="bg-secondary">

    <!-- Page wrapper-->
    <main class="page-wrapper">
        <!-- Navbar. Remove 'fixed-top' class to make the navigation bar scrollable with the page-->
        <header class="navbar navbar-expand-lg fixed-top">
            <div class="container"><a class="navbar-brand pe-sm-3" href="/dashboard"><span
                        class="text-primary flex-shrink-0 me-2">
                    </span>My Stars</a>
                {{-- <div class="form-check form-switch mode-switch order-lg-2 me-3 me-lg-4 ms-auto" data-bs-toggle="mode">
                    <input class="form-check-input" type="checkbox" id="theme-mode">
                    <label class="form-check-label" for="theme-mode"><i class="ai-sun fs-lg"></i></label>
                    <label class="form-check-label" for="theme-mode"><i class="ai-moon fs-lg"></i></label>
                </div> --}}
                <!-- User signed in state. Account dropdown on screens > 576px-->
                <div class="dropdown nav d-none d-sm-block order-lg-3"><a class="nav-link d-flex align-items-center p-0"
                        href="#" data-bs-toggle="dropdown" aria-expanded="false"><img
                            class="border rounded-circle"
                            src="https://pipeline-apps.sgp1.digitaloceanspaces.com/{{ Auth::user()->profile->profile_picture }}"
                            width="48" alt="Profile Picture">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end my-1">

                        @if(Auth::user()->profile->profile_type == 'brand')
                            <h6 class="dropdown-header fs-xs fw-medium text-muted text-uppercase pb-1">Dashboard</h6>
                            <a class="dropdown-item" href="/create-campaign">
                                <i class="ai-bulb fs-lg opacity-70 me-2"></i> Ideate
                            </a>
                            <a class="dropdown-item" href="/campaigns">
                                <i class="ai-heart fs-lg opacity-70 me-2"></i>Campaign
                            </a>
                            <a class="dropdown-item" href="/analytics">
                                <i class="ai-activity fs-lg opacity-70 me-2"></i>Analytics
                            </a>
                            {{-- <a class="dropdown-item d-flex align-items-center" href="/tickets">
                        <i class="ai-messages fs-lg opacity-70 me-2"></i>Chat
                    </a> --}}

                            <div class="dropdown-divider"></div>

                            <h6 class="dropdown-header fs-xs fw-medium text-muted text-uppercase pb-1">Account</h6>
                            <a class="dropdown-item" href="/profile">
                                <i class="ai-user-check fs-lg opacity-70 me-2"></i>Profile
                            </a>
                            <a class="dropdown-item" href="/invoices"><i
                                    class="ai-wallet fs-base opacity-70 me-2 mt-n1"></i>Invoice</a>
                        @else
                            <h6 class="dropdown-header fs-xs fw-medium text-muted text-uppercase pb-1">Dashboard</h6>
                            <a class="dropdown-item" href="/campaigns">
                                <i class="ai-bulb fs-lg opacity-70 me-2"></i>Explore
                            </a>
                            <a class="dropdown-item" href="/contents">
                                <i class="ai-heart fs-lg opacity-70 me-2"></i>Content
                            </a>
                            <a class="dropdown-item" href="/analytics">
                                <i class="ai-activity fs-lg opacity-70 me-2"></i>Analytics
                            </a>
                            {{-- <a class="dropdown-item d-flex align-items-center" href="/tickets">
                            <i class="ai-messages fs-lg opacity-70 me-2"></i>Chat
                        </a> --}}

                            <div class="dropdown-divider"></div>

                            <h6 class="dropdown-header fs-xs fw-medium text-muted text-uppercase pb-1">Account</h6>
                            <a class="dropdown-item" href="/profile">
                                <i class="ai-user-check fs-lg opacity-70 me-2"></i>Profile
                            </a>
                            <a class="dropdown-item" href="/wallet"><i
                                    class="ai-wallet fs-base opacity-70 me-2 mt-n1"></i>Wallet</a>
                        @endif
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/guides"><i
                                class="ai-help fs-base opacity-70 me-2 mt-n1"></i>Guide</a>
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="dropdown-item" type="submit"><i
                                    class="ai-logout fs-lg opacity-70 me-2"></i>Sign out</button>
                        </form>
                    </div>
                </div>
                <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>

            </div>
        </header>

        <!-- Page content-->
        <div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
            <div class="row pt-sm-2 pt-lg-0">
                <!-- Sidebar (offcanvas on sreens < 992px)-->
                <aside class="col-lg-3 pe-lg-4 pe-xl-5 mt-n3">
                    <div class="position-lg-sticky top-0">
                        <div class="d-none d-lg-block" style="padding-top: 105px;"></div>
                        <div class="offcanvas-lg offcanvas-start" id="sidebarAccount">
                            <button class="btn-close position-absolute top-0 end-0 mt-3 me-3 d-lg-none" type="button"
                                data-bs-dismiss="offcanvas" data-bs-target="#sidebarAccount"></button>
                            <div class="offcanvas-body">
                                <div class="pb-2 pb-lg-0 mb-4 mb-lg-5"><img class="d-block rounded-circle mb-2"
                                        src="https://pipeline-apps.sgp1.digitaloceanspaces.com/{{ Auth::user()->profile->profile_picture }}"
                                        width="80" alt="Profile">
                                    <h3 class="h5 mb-1">{{ Auth::user()->profile->name }}</h3>
                                    <p class="fs-sm text-muted mb-0">{{ ucfirst(Auth::user()->profile->profile_type) }}</p>
                                </div>


                                @if(Auth::user()->profile->profile_type == 'brand')
                                    <nav class="nav flex-column pb-2 pb-lg-4 mb-1">
                                        <h4 class="fs-xs fw-medium text-muted text-uppercase pb-1 mb-2">Dashboard</h4>
                                        <a class="nav-link fw-semibold py-2 px-0" href="/campaigns/create">
                                            <i class="ai-bulb fs-5 opacity-60 me-2"></i>Ideate</a>
                                        <a class="nav-link fw-semibold py-2 px-0" href="/campaigns">
                                            <i class="ai-heart fs-5 opacity-60 me-2"></i>Campaign</a>
                                        <a class="nav-link fw-semibold py-2 px-0" href="/analytics">
                                            <i class="ai-activity fs-5 opacity-60 me-2"></i>Analytics</a>
                                        {{-- <a class="nav-link fw-semibold py-2 px-0" href="account-favorites.html">
                                    <i class="ai-heart fs-5 opacity-60 me-2"></i>Favorites</a> --}}
                                    </nav>
                                    <nav class="nav flex-column pb-2 pb-lg-4 mb-3">
                                        <h4 class="fs-xs fw-medium text-muted text-uppercase pb-1 mb-2">Account</h4>
                                        <a class="nav-link fw-semibold py-2 px-0" href="/profile">
                                            <i class="ai-user-check fs-5 opacity-60 me-2"></i>Profile
                                        </a>
                                        <a class="nav-link fw-semibold py-2 px-0" href="/invoices">
                                            <i class="ai-wallet fs-5 opacity-60 me-2"></i>Invoice
                                        </a>
                                    </nav>
                                @else
                                    <nav class="nav flex-column pb-2 pb-lg-4 mb-1">
                                        <h4 class="fs-xs fw-medium text-muted text-uppercase pb-1 mb-2">Dashboard</h4>
                                        <a class="nav-link fw-semibold py-2 px-0" href="/campaigns">
                                            <i class="ai-bulb fs-5 opacity-60 me-2"></i>Explore</a>
                                        <a class="nav-link fw-semibold py-2 px-0" href="/contents">
                                            <i class="ai-heart fs-5 opacity-60 me-2"></i>Content</a>
                                        <a class="nav-link fw-semibold py-2 px-0" href="/analytics">
                                            <i class="ai-activity fs-5 opacity-60 me-2"></i>Analytics</a>
                                        {{-- <a class="nav-link fw-semibold py-2 px-0" href="account-favorites.html">
                                        <i class="ai-heart fs-5 opacity-60 me-2"></i>Favorites</a> --}}
                                    </nav>
                                    <nav class="nav flex-column pb-2 pb-lg-4 mb-3">
                                        <h4 class="fs-xs fw-medium text-muted text-uppercase pb-1 mb-2">Account</h4>
                                        <a class="nav-link fw-semibold py-2 px-0" href="/profile">
                                            <i class="ai-user-check fs-5 opacity-60 me-2"></i>Profile
                                        </a>
                                        <a class="nav-link fw-semibold py-2 px-0" href="/wallet">
                                            <i class="ai-wallet fs-5 opacity-60 me-2"></i>Wallet
                                        </a>
                                    </nav>
                                @endif

                                <nav class="nav flex-column">
                                    
                                    @if(Auth::user()->admin)
                                    <a class="nav-link fw-semibold py-2 px-0" href="/guides">
                                        <i class="ai-tool fs-5 opacity-60 me-2"></i>Admin
                                    </a>
                                    @endif

                                    <a class="nav-link fw-semibold py-2 px-0" href="/guides">
                                        <i class="ai-help fs-5 opacity-60 me-2"></i>Guide
                                    </a>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button class="nav-link fw-semibold py-2 px-0" type="submit">
                                            <i class="ai-logout fs-5 opacity-60 me-2"></i>Sign out
                                        </button>

                                    </form>

                                </nav>
                            </div>
                        </div>
                    </div>
                </aside>

                @yield('content')
            </div>
        </div>

        <!-- Divider for dark mode only-->
        <hr class="d-none d-dark-mode-block">
        <!-- Sidebar toggle button-->
        <button class="d-lg-none btn btn-sm fs-sm btn-primary w-100 rounded-0 fixed-bottom" data-bs-toggle="offcanvas"
            data-bs-target="#sidebarAccount"><i class="ai-menu me-2"></i>Account menu</button>
    </main>
    <!-- Footer-->
    <footer class="footer bg-dark position-relative pb-4 pt-md-2 py-lg-2 py-xl-3">
        <div class="d-none d-dark-mode-block position-absolute top-0 start-0 w-100 h-100"
            style="background-color: rgba(255,255,255, .02);"></div>
        <div class="dark-mode container position-relative zindex-2 pt-2 pb-2">



            <div class="d-sm-flex align-items-center pt-3">
                <div class="d-sm-flex align-items-center pe-sm-2"><a
                        class="navbar-brand d-inline-flex align-items-center me-sm-5 mb-4 mb-sm-0"
                        href="/"><span class="text-primary flex-shrink-0 me-2">
                        </span><span class="text-nav">My Stars</span></a>
                    <div class="text-nowrap mb-4 mb-sm-0"><a
                            class="btn btn-icon btn-sm btn-secondary btn-youtube rounded-circle mx-2 ms-sm-0 me-sm-3"
                            href="#"><i class="ai-youtube"></i></a><a
                            class="btn btn-icon btn-sm btn-secondary btn-instagram rounded-circle mx-2 ms-sm-0 me-sm-3"
                            href="#"><i class="ai-instagram"></i></a><a
                            class="btn btn-icon btn-sm btn-secondary btn-facebook rounded-circle mx-2 ms-sm-0 me-sm-3"
                            href="#"><i class="ai-facebook"></i></a><a
                            class="btn btn-icon btn-sm btn-secondary btn-tiktok rounded-circle mx-2 ms-sm-0 me-sm-3"
                            href="#"><i class="ai-tiktok"></i></a><a
                            class="btn btn-icon btn-sm btn-secondary btn-twitter rounded-circle mx-2 ms-sm-0 me-sm-3"
                            href="#"><i class="ai-twitter"></i></a>

                    </div>
                </div> All rights reserved.
            </div>
        </div>
        <div class="pt-5 pt-lg-0"></div>
    </footer>
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll>
        <svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor"
                stroke-width="1.5" stroke-miterlimit="10"></circle>
        </svg><i class="ai-arrow-up"></i></a>
    <!-- Vendor scripts: js libraries and plugins-->
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <!-- Main theme script-->
    <script src="/assets/js/theme.min.js"></script>
</body>

</html>
