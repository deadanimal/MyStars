<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>My Stars </title>

    <meta name="description" content="Around - Multipurpose Bootstrap HTML Template">
    <meta name="keywords"
        content="bootstrap, business, corporate, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, saas, multipurpose, product landing, shop, software, ui kit, web studio, landing, dark mode, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="My Stars">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
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
    <link rel="stylesheet" media="screen" href="/assets/vendor/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" media="screen" href="/assets/vendor/aos/dist/aos.css" />
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

<body>

    <!-- Page wrapper-->
    <main class="page-wrapper">
        <!-- Navbar. Remove 'fixed-top' class to make the navigation bar scrollable with the page-->
        <header class="navbar navbar-expand-lg fixed-top">
            <div class="container"><a class="navbar-brand pe-sm-3" href="/"><span
                        class="text-primary flex-shrink-0 me-2">
                        </span>My Stars</a>
                {{-- <div class="form-check form-switch mode-switch order-lg-2 me-3 me-lg-4 ms-auto" data-bs-toggle="mode">
                    <input class="form-check-input" type="checkbox" id="theme-mode">
                    <label class="form-check-label" for="theme-mode"><i class="ai-sun fs-lg"></i></label>
                    <label class="form-check-label" for="theme-mode"><i class="ai-moon fs-lg"></i></label>
                </div> --}}
                <a class="btn btn-primary btn-sm fs-sm order-lg-3 d-none d-sm-inline-flex" href="/dashboard"></i>Dashboard</a>
                <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
                {{-- <nav class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav navbar-nav-scroll me-auto" style="--ar-scroll-height: 520px;">
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle active" href="#"
                                data-bs-toggle="dropdown" aria-expanded="false">Landings</a>
                            <div class="dropdown-menu overflow-hidden p-0">
                                <div class="d-lg-flex">
                                    <div class="mega-dropdown-column pt-1 pt-lg-3 pb-lg-4">
                                        <ul class="list-unstyled mb-0">
                                            <li><a class="dropdown-item" href="index.html">Template Intro Page</a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 rounded-3 rounded-start-0"
                                                    style="background-image: url(assets/img/megamenu/landings.jpg);"></span>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="landing-mobile-app-showcase.html">Mobile App
                                                    Showcase</a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                                    style="background-image: url(assets/img/megamenu/mobile-app.jpg);"></span>
                                            </li>
                                            <li><a class="dropdown-item" href="landing-product.html">Product
                                                    Landing</a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                                    style="background-image: url(assets/img/megamenu/product-landing.jpg);"></span>
                                            </li>
                                            <li><a class="dropdown-item" href="landing-saas-v1.html">SaaS v.1</a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                                    style="background-image: url(assets/img/megamenu/saas-1.jpg);"></span>
                                            </li>
                                            <li><a class="dropdown-item" href="landing-saas-v2.html">SaaS v.2</a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                                    style="background-image: url(assets/img/megamenu/saas-2.jpg);"></span>
                                            </li>
                                            <li><a class="dropdown-item" href="landing-saas-v3.html">SaaS v.3<span
                                                        class="text-danger fs-xs ms-2">New</span></a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                                    style="background-image: url(assets/img/megamenu/saas-3.jpg);"></span>
                                            </li>
                                            <li><a class="dropdown-item" href="landing-shop.html">Shop
                                                    Homepage</a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                                    style="background-image: url(assets/img/megamenu/shop-homepage.jpg);"></span>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="landing-marketing-agency.html">Marketing Agency</a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                                    style="background-image: url(assets/img/megamenu/marketing-agency.jpg);"></span>
                                            </li>
                                            <li><a class="dropdown-item" href="landing-creative-agency.html">Creative
                                                    Agency</a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                                    style="background-image: url(assets/img/megamenu/creative-agency.jpg);"></span>
                                            </li>
                                            <li><a class="dropdown-item" href="landing-conference.html">Conference
                                                    (Event)<span class="text-danger fs-xs ms-2">New</span></a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                                    style="background-image: url(assets/img/megamenu/conference.jpg);"></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mega-dropdown-column pb-2 pt-lg-3 pb-lg-4">
                                        <ul class="list-unstyled mb-0">
                                            <li><a class="dropdown-item" href="landing-web-studio.html">Web
                                                    Studio</a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                                    style="background-image: url(assets/img/megamenu/web-studio.jpg);"></span>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="landing-corporate.html">Corporate</a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                                    style="background-image: url(assets/img/megamenu/corporate.jpg);"></span>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="landing-business-consulting.html">Business
                                                    Consulting</a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                                    style="background-image: url(assets/img/megamenu/business-consulting.jpg);"></span>
                                            </li>
                                            <li><a class="dropdown-item" href="landing-coworking-space.html">Coworking
                                                    Space</a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                                    style="background-image: url(assets/img/megamenu/coworking.jpg);"></span>
                                            </li>
                                            <li><a class="dropdown-item" href="landing-yoga-studio.html">Yoga
                                                    Studio</a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                                    style="background-image: url(assets/img/megamenu/yoga-studio.jpg);"></span>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="landing-influencer.html">Influencer<span
                                                        class="text-danger fs-xs ms-2">New</span></a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                                    style="background-image: url(assets/img/megamenu/influencer.jpg);"></span>
                                            </li>
                                            <li><a class="dropdown-item" href="landing-blog.html">Blog
                                                    Homepage</a><span
                                                    class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                                    style="background-image: url(assets/img/megamenu/blog-homepage.jpg);"></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mega-dropdown-column position-relative border-start zindex-3"></div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">Portfolio</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="portfolio-list-v1.html">List View v.1</a>
                                        </li>
                                        <li><a class="dropdown-item" href="portfolio-list-v2.html">List View v.2</a>
                                        </li>
                                        <li><a class="dropdown-item" href="portfolio-grid-v1.html">Grid View v.1</a>
                                        </li>
                                        <li><a class="dropdown-item" href="portfolio-grid-v2.html">Grid View v.2</a>
                                        </li>
                                        <li><a class="dropdown-item" href="portfolio-slider.html">Slider View</a></li>
                                        <li><a class="dropdown-item" href="portfolio-single-v1.html">Single Project
                                                v.1</a></li>
                                        <li><a class="dropdown-item" href="portfolio-single-v2.html">Single Project
                                                v.2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="shop-catalog.html">Catalog (Listing)</a>
                                        </li>
                                        <li><a class="dropdown-item" href="shop-single.html">Product Page</a></li>
                                        <li><a class="dropdown-item" href="shop-checkout.html">Checkout</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="blog-grid-sidebar.html">Grid View with
                                                Sidebar</a></li>
                                        <li><a class="dropdown-item" href="blog-grid.html">Grid View no Sidebar</a>
                                        </li>
                                        <li><a class="dropdown-item" href="blog-list-sidebar.html">List View with
                                                Sidebar</a></li>
                                        <li><a class="dropdown-item" href="blog-list.html">List View no Sidebar</a>
                                        </li>
                                        <li><a class="dropdown-item" href="blog-single-v1.html">Single post v.1</a>
                                        </li>
                                        <li><a class="dropdown-item" href="blog-single-v2.html">Single post v.2</a>
                                        </li>
                                        <li><a class="dropdown-item" href="blog-single-v3.html">Single post v.3</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">About</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/about-agency.html">About - Agency</a></li>
                                        <li><a class="dropdown-item" href="/about-product.html">About - Product</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="services-v1.html">Services v.1</a></li>
                                        <li><a class="dropdown-item" href="services-v2.html">Services v.2</a></li>
                                        <li><a class="dropdown-item" href="services-v3.html">Services v.3</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="pricing.html">Pricing</a></li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">Contacts</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="contacts-v1.html">Contacts v.1</a></li>
                                        <li><a class="dropdown-item" href="contacts-v2.html">Contacts v.2</a></li>
                                        <li><a class="dropdown-item" href="contacts-v3.html">Contacts v.3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">Specialty Pages</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="404-v1.html">404 Error v.1</a></li>
                                        <li><a class="dropdown-item" href="404-v2.html">404 Error v.2</a></li>
                                        <li><a class="dropdown-item" href="404-v3.html">404 Error v.3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                aria-expanded="false">Account</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">Auth pages</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/account-signin.html">Sign In</a></li>
                                        <li><a class="dropdown-item" href="/account-signup.html">Sign Up</a></li>
                                        <li><a class="dropdown-item" href="/account-signinup.html">Sign In / Up</a>
                                        </li>
                                        <li><a class="dropdown-item" href="/account-password-recovery.html">Password
                                                Recovery</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="/account-overview.html">Overview</a></li>
                                <li><a class="dropdown-item" href="/account-settings.html">Settings</a></li>
                                <li><a class="dropdown-item" href="/account-billing.html">Billing</a></li>
                                <li><a class="dropdown-item" href="/account-orders.html">Orders</a></li>
                                <li><a class="dropdown-item" href="/account-earnings.html">Earnings</a></li>
                                <li><a class="dropdown-item" href="/account-chat.html">Chat (Messages)</a></li>
                                <li><a class="dropdown-item" href="/account-favorites.html">Favorites (Wishlist)</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="components/typography.html">UI Kit</a></li>
                        <li class="nav-item"><a class="nav-link" href="docs/getting-started.html">Docs</a></li>
                    </ul>
                    <div class="d-sm-none p-3 mt-n3"><a class="btn btn-primary w-100  mb-1"
                            href="https://themes.getbootstrap.com/product/around-multipurpose-template-ui-kit/"
                            target="_blank" rel="noopener"><i class="ai-cart fs-xl me-2 ms-n1"></i>Dashboard</a></div>
                </nav> --}}
            </div>
        </header>

        @yield('content')
    </main>
    <!-- Footer-->
    <footer class="footer py-5">
        <div class="container pt-md-2 pt-lg-3 pt-xl-4">
            <div class="row pb-5 pt-sm-2 mb-lg-2">
                <div class="col-md-12 col-lg-3 pb-2 pb-lg-0 mb-4 mb-lg-0"><a class="navbar-brand py-0 mb-3 mb-lg-4"
                        href="/"><span class="text-nav">My Stars</span></a>
                    <p class="fs-sm pb-2 pb-lg-3 mb-3">Tellus non diam morbi quam vel venenatis proin sed. Dolor
                        elementum nunc dictum</p>
                    <div class="d-flex">
                                <a
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
                </div>
                <div class="col-sm-3 col-lg-2 offset-xl-1 mb-4 mb-sm-0">
                    <ul class="nav flex-column">
                        <li><a class="nav-link py-1 px-0" href="/services">Services</a></li>
                        <li><a class="nav-link py-1 px-0" href="/guides?tag=case">Case studies</a></li>
                        <li><a class="nav-link py-1 px-0" href="/rewards">Rewards</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 col-lg-2 offset-xl-1 mb-4 mb-sm-0">
                    <ul class="nav flex-column">
                        <li><a class="nav-link py-1 px-0" href="/support">Support</a></li>
                        <li><a class="nav-link py-1 px-0" href="/terms">Terms</a></li>
                        <li><a class="nav-link py-1 px-0" href="/privacy">Privacy</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 col-lg-2 offset-xl-1 mb-4 mb-sm-0">
                    <ul class="nav flex-column">
                        <li><a class="nav-link py-1 px-0" href="/guides/1">Create a campaign</a></li>
                        <li><a class="nav-link py-1 px-0" href="/guides/2">Create a content</a></li>
                        <li><a class="nav-link py-1 px-0" href="/guides/3">Content ideas?</a></li>
                    </ul>
                </div>                
                <div class="col-sm-5 col-lg-4 col-xl-3 offset-lg-1">
                    
                    {{-- <h3 class="h6 mb-2">Stay up to date</h3>
                    <p class="fs-sm">Subscribe to our news and case studies</p>
                    <div class="input-group input-group-sm">
                        <input class="form-control" type="text" placeholder="Your email">
                        <button class="btn btn-primary" type="button">Subscribe</button>
                    </div> --}}
                </div>
            </div>
            <p class="fs-sm mb-0"><span class="opacity-70">&copy; All rights reserved.</p>
        </div>
    </footer>
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll>
        <svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor"
                stroke-width="1.5" stroke-miterlimit="10"></circle>
        </svg><i class="ai-arrow-up"></i></a>
    <!-- Vendor scripts: js libraries and plugins-->
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="/assets/vendor/parallax-js/dist/parallax.min.js"></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/vendor/aos/dist/aos.js"></script>
    <!-- Main theme script-->
    <script src="/assets/js/theme.min.js"></script>
</body>

</html>
