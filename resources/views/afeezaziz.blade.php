<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Afeez Aziz | My Stars</title>
    <meta name="description" content="Around - Multipurpose Bootstrap HTML Template">
    <meta name="keywords"
        content="bootstrap, business, corporate, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, saas, multipurpose, product landing, shop, software, ui kit, web studio, landing, dark mode, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Afeez aziz">
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

    <script>
        (function() {
            window.onload = function() {
                const preloader = document.querySelector('.page-loading');
                preloader.classList.remove('active');
                setTimeout(function() {
                    preloader.remove();
                }, 1500);
            };
        })();
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" id="google-font">
    <link rel="stylesheet" media="screen" href="/assets/vendor/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" media="screen" href="/assets/vendor/aos/dist/aos.css" />
    <link rel="stylesheet" media="screen" href="/assets/vendor/simplebar/dist/simplebar.min.css" />
    <link rel="stylesheet" media="screen" href="/assets/css/theme.min.css">

    <script>
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u = "https://stars.matomo.cloud/";
            _paq.push(['setTrackerUrl', u + 'matomo.php']);
            _paq.push(['setSiteId', '2']);
            var d = document,
                g = d.createElement('script'),
                s = d.getElementsByTagName('script')[0];
            g.async = true;
            g.src = '//cdn.matomo.cloud/stars.matomo.cloud/matomo.js';
            s.parentNode.insertBefore(g, s);
        })();
    </script>
</head>


<body>

    <div class="page-loading active">
        <div class="page-loading-inner">
            <div class="page-spinner"></div><span>Loading...</span>
        </div>
    </div>

    <main class="page-wrapper">


        <section class="pt-5" style="background: linear-gradient(176.14deg, #f8f7e1 2.64%, #feeae7 94.95%);">
            <div class="container ignore-dark-mode pt-5">
                <div class="row align-items-center justify-content-center pt-3 pt-sm-4 mt-sm-3">
                    <div class="col-sm-9 col-md-8 col-lg-7 offset-lg-1 order-md-2 pb-3 pb-sm-0 mt-md-n5 mb-4 mb-sm-5">
                        <div class="ps-md-4 ps-lg-0 mt-md-n4 mt-lg-n5">
                            <h1 class="display-5 mb-lg-4">Hey, I'm <span class='text-dark fw-bolder'>Afeez
                                    Aziz</span>.<br>I am very passionate about AI, crypto &amp; social media</h1>
                            <p class="fs-lg">I educate the public on how to use tools for AI, crypto, and social media
                                to make the world a better place. I run a lot of businesses to support these endeavours and social causes that are close to me. </p>
                            <div style="max-width: 24rem;">
                                <div class="d-table text-dark mx-auto">
                                    <div class="ms-n4">
                                        <svg width="41" height="63" viewBox="0 0 41 63" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.70719 1.494C4.5534 1.65395 6.38091 1.98403 8.16644 2.48C10.8498 3.2115 13.4067 4.3456 15.7501 5.84364C17.1305 6.71796 18.332 7.84679 19.2907 9.16996C20.2685 10.6108 20.8107 12.3027 20.8525 14.0434C20.8944 15.8731 20.5198 17.6885 19.757 19.3521C18.9595 21.0449 17.895 22.5984 16.6042 23.9531C15.255 25.3333 13.8311 26.6386 12.3391 27.863C10.6723 29.1991 9.32942 30.8951 8.41109 32.8239C7.5511 34.9578 7.43102 37.3183 8.07004 39.5284C8.34394 40.5746 8.73786 41.5855 9.24394 42.5412C9.71127 43.4532 10.2506 44.3265 10.8568 45.1528C11.9859 46.6778 13.2868 48.0677 14.7338 49.2951C16.0224 50.367 17.3761 51.3581 18.7871 52.2627C22.7031 54.7712 27.0676 56.4981 31.6397 57.3482C33.1241 57.6183 34.6272 57.7729 36.1355 57.8107C35.5871 58.0614 35.0562 58.3005 34.5512 58.5326C33.3243 59.1173 32.1879 59.6778 31.2609 60.1683C29.4152 61.154 28.3207 61.8969 28.4238 62.1529C28.527 62.4088 29.8029 62.1362 31.7936 61.4851C32.7866 61.1637 33.953 60.7405 35.2397 60.2505C35.8644 60.0001 36.5536 59.7324 37.254 59.4548C37.5969 59.3145 37.9527 59.1708 38.3067 59.0205L38.8475 58.7926L39.134 58.6744C39.2949 58.6023 39.4506 58.5189 39.5998 58.425C39.9282 58.225 40.1869 57.9286 40.3408 57.5762C40.4833 57.2187 40.504 56.8241 40.3997 56.4536C40.2868 56.0775 40.0719 55.74 39.7788 55.4786C39.6516 55.3593 39.5176 55.2474 39.3777 55.1434L39.1528 54.9754C38.5324 54.519 37.9461 54.0604 37.4037 53.6109C36.2947 52.7251 35.3016 51.8844 34.4537 51.1985C32.7674 49.8103 31.647 49.0106 31.4837 49.2273C31.3204 49.444 32.1159 50.5798 33.6092 52.2549C34.3574 53.0851 35.2797 54.0486 36.3776 55.048C36.7201 55.3712 37.095 55.6859 37.4715 56.0069C35.6206 55.8144 33.7812 55.5246 31.9608 55.1385C27.6876 54.1971 23.6104 52.5206 19.911 50.1838C18.5912 49.3314 17.3217 48.4035 16.1088 47.4048C14.8 46.3182 13.6218 45.0832 12.5979 43.7247C12.065 43.0114 11.5879 42.2581 11.1709 41.4715C10.7472 40.6775 10.4113 39.8397 10.1694 38.9728C9.65002 37.2861 9.71258 35.4739 10.347 33.827C11.1239 32.1721 12.2585 30.7104 13.669 29.5473C15.1903 28.258 16.6343 26.8801 17.9936 25.4209C19.3924 23.8862 20.5327 22.1346 21.37 20.2343C22.2101 18.2832 22.5893 16.1649 22.4782 14.0436C22.3758 11.9629 21.6677 9.95748 20.441 8.27375C19.335 6.82379 17.9555 5.60472 16.3805 4.68551C13.889 3.21611 11.1745 2.16303 8.34397 1.56774C6.49629 1.15602 4.60615 0.965822 2.71348 1.00117C1.39001 1.04451 0.687315 1.18437 0.706339 1.25537C0.72536 1.32636 1.4313 1.37932 2.74118 1.49181">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="pe-3 me-sm-3">
                                        <h3 class="h5 fw-bold mb-4">Chat with me</h3>
                                        <a href="/p/afeezaziz/chat">
                                        <button class="btn btn-lg btn-primary px-4" type="button"><span
                                                class="text-light px-sm-2">On My Stars</button></a>
                                    </div>
                                    <div class="pe-3 me-sm-3">
                                        <div class="d-table position-relative text-dark mt-n3 mb-2">
                                            <h3
                                                class="h5 fw-bold mb-0 position-absolute start-50 top-50 translate-middle">
                                                Discuss</h3>
                                            <svg width="110" height="61" viewBox="0 0 110 61" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M84.1744 8.99242C89.2842 10.1063 93.0376 12.7057 96.7499 15.5341C108.923 24.8193 111.49 36.2909 100.417 45.1189C83.2055 58.8021 48.0114 63.4542 23.087 53.9044C17.5662 51.7947 9.9999 49.4497 5.27855 43.1465C0.886192 37.2853 2.15619 31.4849 5.54649 26.5131C9.00536 21.4124 14.671 17.1643 19.0417 14.5646C38.1454 3.22854 73.5893 -3.82295 102.296 8.41696C102.888 8.65974 103.544 8.54327 103.794 8.16259C104.044 7.78192 103.816 7.28442 103.268 7.04955C73.7178 -5.54836 37.1686 1.59265 17.5063 13.2588C12.0667 16.5023 4.68442 22.2219 1.65573 28.9688C-0.399409 33.5827 -0.451644 38.6676 3.34872 43.7826C8.35983 50.4935 16.3831 53.0743 22.243 55.3175C47.9737 65.1787 84.3664 60.4212 102.113 46.284C114.031 36.7984 111.346 24.4705 98.2543 14.4889C94.2662 11.4272 90.1346 8.65809 84.5879 7.44945C83.9764 7.31649 83.3891 7.55457 83.3114 7.98695C83.1897 8.41142 83.6068 8.86737 84.1744 8.99242Z">
                                                </path>
                                            </svg>
                                        </div>
                                        <a href="/p/afeezaziz/bookslot">
                                        <button class="btn btn-lg bg-dark px-4" type="button"><span
                                                class="text-light px-sm-2">Book My Time</button>
                                        </a>
                                        {{-- <div class="d-flex align-items-center pt-2 mt-1"><span
                                                class="badge bg-danger text-light rounded-pill me-2">Expires</span><span
                                                class="fs-sm">01/12 8:00 pm</span></div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-5 col-md-4 order-md-1"><img src="assets/img/landing/influencer/hero.png"
                            width="416" alt="Influencer"></div>
                </div>
            </div>
        </section>


        <section class="container pt-5 mt-lg-3 mt-xl-4 mt-xxl-5">
            <div class="pt-2 pt-sm-3 mt-md-3" style="max-width: 60rem;">
                <h2 class="pb-3 mb-2 mb-sm-3 mb-lg-4">I'm a 33 year old entreprenuer, with passions in a lot of stuffs. I was recognized as the <span class='text-primary'>top 100 influencers</span>
                     for business and startups. Over 100,000 people have already changed their business strategy for the better with me.</h2>
                <p class="fs-lg">Follow me on social media platforms:</p>
                <div class="d-flex">
                    <a class="btn btn-outline-secondary btn-icon btn-sm btn-instagram me-3"
                        href="https://www.instagram.com/afeezabdulaziz/">
                        <i class="ai-instagram"></i>
                    </a>
                    <a class="btn btn-outline-secondary btn-icon btn-sm btn-tiktok me-3"
                        href="https://www.tiktok.com/@afeezabdulaziz">
                        <i class="ai-tiktok"></i>
                    </a>
                    <a class="btn btn-outline-secondary btn-icon btn-sm btn-youtube me-3"
                        href="https://www.youtube.com/@AfeezAbdulAziz">
                        <i class="ai-youtube"></i>
                    </a>
                    <a class="btn btn-outline-secondary btn-icon btn-sm btn-twitter me-3"
                        href="https://twitter.com/AfeezAziz">
                        <i class="ai-twitter"></i>
                    </a>
                    <a class="btn btn-outline-secondary btn-icon btn-sm btn-facebook me-3"
                        href="https://www.facebook.com/afeezaziz/">
                        <i class="ai-facebook"></i>
                    </a>
                    <a class="btn btn-outline-secondary btn-icon btn-sm btn-linkedin me-3"
                        href="https://www.linkedin.com/in/afeezaziz/">
                        <i class="ai-linkedin"></i>
                    </a>
                </div>
            </div>
        </section>


        <section class="container py-5 my-lg-3 my-xl-4 my-xxl-5" data-aos="fade-up" data-aos-duration="600"
            data-aos-offset="280" data-disable-parallax-down="md">
            <div class="row align-items-xl-center py-2 py-sm-3 my-md-3 mb-lg-4 mb-xl-5">
                <div class="col-md-6 pb-4 pb-md-0 mb-3 mb-md-0"><img class="rounded-4"
                        src="assets/img/landing/influencer/features.jpg" alt="Influencer"></div>
                <div class="col-md-6 col-xl-5 offset-xl-1" data-aos="fade-up" data-aos-duration="850"
                    data-aos-offset="180" data-disable-parallax-down="md">
                    <div class="ps-md-4 ps-xl-0">
                        <h2 class="h1 pb-3 mb-2 mb-md-3 mb-xl-4">Why training with me?</h2>
                        <ul class="list-unstyled pb-1 pb-xl-2">
                            <li class="d-flex fs-lg pb-1 mb-3"><i
                                    class="ai-fruit text-primary fs-4 mt-n1 me-3"></i>Nutrition guides for the best
                                overall results.</li>
                            <li class="d-flex fs-lg pb-1 mb-3"><i
                                    class="ai-drop text-primary fs-4 mt-n1 me-3"></i>Individually designed programs and
                                workout plans.</li>
                            <li class="d-flex fs-lg pb-1 mb-3"><i
                                    class="ai-stones text-primary fs-4 mt-n1 me-3"></i>Stretching routines.</li>
                            <li class="d-flex fs-lg pb-1 mb-3"><i
                                    class="ai-weight text-primary fs-4 mt-n1 me-3"></i>Workouts designed for optimal
                                results.</li>
                            <li class="d-flex fs-lg pb-1 mb-3"><i
                                    class="ai-heart-alt text-primary fs-4 mt-n1 me-3"></i>Bonus features like weight
                                history, gratitude journal, ect.</li>
                            <li class="d-flex fs-lg pb-1 mb-3"><i
                                    class="ai-chat text-primary fs-4 mt-n1 me-3"></i>Direct coaching and 24/7 access to
                                support community.</li>
                        </ul>
                        <h3 class="h5 text-body mb-lg-4">My achievements:</h3><img class="d-dark-mode-none"
                            src="assets/img/landing/influencer/achievements-dark.svg" alt="Achievements"><img
                            class="d-none d-dark-mode-block"
                            src="assets/img/landing/influencer/achievements-light.svg" alt="Achievements">
                    </div>
                </div>
            </div>
        </section>

        <section class="container py-5 my-lg-3 my-xl-4 my-xxl-5">
            <div class="row py-2 py-sm-3 my-md-3">
                <div class="col-lg-5 col-xl-4 pb-2 pb-sm-0 mb-4 mb-sm-5 mb-lg-0" data-aos="fade-up"
                    data-aos-duration="600" data-aos-offset="280" data-disable-parallax-down="md">
                    <h2 class="h1 pb-3 mb-lg-4">Results after taking the guide</h2>
                    <div class="d-flex align-items-center">
                        <div class="d-flex me-3">
                            <div class="bg-light flex-shrink-0 rounded-circle position-relative zindex-4"
                                style="padding: 3px;"><img class="rounded-circle" src="assets/img/avatar/07.jpg"
                                    width="48" alt="Avatar"></div>
                            <div class="bg-light flex-shrink-0 rounded-circle position-relative zindex-3 ms-n3"
                                style="padding: 3px;"><img class="rounded-circle" src="assets/img/avatar/09.jpg"
                                    width="48" alt="Avatar"></div>
                            <div class="bg-light flex-shrink-0 rounded-circle position-relative zindex-2 ms-n3"
                                style="padding: 3px;"><img class="rounded-circle" src="assets/img/avatar/05.jpg"
                                    width="48" alt="Avatar"></div>
                            <div class="bg-light flex-shrink-0 rounded-circle position-relative zindex-1 ms-n3"
                                style="padding: 3px;"><img class="rounded-circle" src="assets/img/avatar/11.jpg"
                                    width="48" alt="Avatar"></div>
                        </div>
                        <p class="mb-0"><strong class='text-dark'>400+</strong> got the result </p>
                    </div>
                </div>
                <div class="col-lg-7 col-xxl-6 offset-xl-1 offset-xxl-2">
                    <div class="row row-cols-1 row-cols-sm-2 gy-4 gy-lg-5">
                        <div class="col" data-aos="fade-up" data-aos-offset="280"
                            data-disable-parallax-down="md">
                            <div class="pe-sm-2 pe-md-4 me-xl-3">
                                <div class="d-inline-block bg-primary text-light rounded p-3 mb-3 mb-md-4"><i
                                        class="ai-target fs-1"></i></div>
                                <h3 class="h5 fw-bold mb-2">Reach your goals</h3>
                                <p class="fs-lg mb-2">Eu pharetra sagittis ornarenam elit scelerisque pellentesque
                                    mauris diam outertn.</p>
                            </div>
                        </div>
                        <div class="col" data-aos="fade-up" data-aos-delay="250" data-aos-offset="280"
                            data-disable-parallax-down="md">
                            <div class="pe-sm-2 pe-md-4 me-xl-3">
                                <div class="d-inline-block bg-primary text-light rounded p-3 mb-3 mb-md-4"><i
                                        class="ai-fruit fs-1"></i></div>
                                <h3 class="h5 fw-bold mb-2">Healthy eating habits</h3>
                                <p class="fs-lg mb-2">Ultricies at vitae nunc,facilisi sagittis nullam mattis nunc
                                    metus suspendisse.</p>
                            </div>
                        </div>
                        <div class="col" data-aos="fade-up" data-aos-delay="500" data-disable-parallax-down="md">
                            <div class="pe-sm-2 pe-md-4 me-xl-3">
                                <div class="d-inline-block bg-primary text-light rounded p-3 mb-3 mb-md-4"><i
                                        class="ai-body fs-1"></i></div>
                                <h3 class="h5 fw-bold mb-2">Nice &amp; healthy body</h3>
                                <p class="fs-lg mb-2">Nunc congue dolor sodales faucibus nun faucibus tristique tempor
                                    in diam.</p>
                            </div>
                        </div>
                        <div class="col" data-aos="fade-up" data-aos-delay="700" data-disable-parallax-down="md">
                            <div class="pe-sm-2 pe-md-4 me-xl-3">
                                <div class="d-inline-block bg-primary text-light rounded p-3 mb-3 mb-md-4"><i
                                        class="ai-heart-alt fs-1"></i></div>
                                <h3 class="h5 fw-bold mb-2">Feel great</h3>
                                <p class="fs-lg mb-2">Lacus neque sed fringilla proin bibendum interdum vivamus verum
                                    dignissim.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="ignore-dark-mode position-relative overflow-hidden">
            <div class="position-absolute top-0 start-0 w-100 h-100" data-aos="zoom-in" data-aos-duration="600"
                data-aos-offset="300" data-disable-parallax-down="md">
                <div class="container-start position-absolute top-0 start-0 w-100 h-100 d-none d-xxl-block"
                    style="transform: rotate(-180deg); border-top-right-radius: 7rem; border-bottom-right-radius: 7rem; background: linear-gradient(176.14deg, #f8f7e1 2.64%, #feeae7 94.95%);">
                </div>
                <div class="container-start position-absolute top-0 start-0 w-100 h-100 d-lg-block d-xxl-none"
                    style="transform: rotate(-180deg); border-top-right-radius: 4rem; border-bottom-right-radius: 4rem; background: linear-gradient(176.14deg, #f8f7e1 2.64%, #feeae7 94.95%);">
                </div>
                <div class="container-start position-absolute top-0 start-0 w-100 h-100 d-sm-block d-lg-none"
                    style="transform: rotate(-180deg); border-top-right-radius: 2.25rem; border-bottom-right-radius: 2.25rem; background: linear-gradient(176.14deg, #f8f7e1 2.64%, #feeae7 94.95%);">
                </div>
            </div>
            <div class="container position-relative zindex-2 pt-5">
                <div class="row align-items-center justify-content-center pt-1 pt-sm-3 pt-md-4">
                    <div class="col-md-6 col-xl-5 offset-md-1 pb-3 pb-sm-0 mt-md-n5 mb-4 mb-sm-5" data-aos="fade-up"
                        data-aos-duration="850" data-aos-offset="180" data-disable-parallax-down="md">
                        <div class="mx-auto" style="max-width: 25rem;">
                            <h2 class="display-5 pb-5 mb-2">Want to improve your business today? Discuss with me now!</h2>
                            <div class="d-flex">
                                <div class="pe-3 me-lg-3">
                                    <a href="/p/afeezaziz/chat">
                                    <button class="btn btn-lg btn-primary px-4" type="button"><span
                                            class="text-light px-sm-2">Chat With Me</button>
                                    </a>
                                </div>
                                <div>
                                    <a href="/p/afeezaziz/booktime">
                                    <button class="btn btn-lg bg-dark px-4" type="button"><span
                                            class="text-light px-sm-2">Book My Time</button>
                                    </a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-sm-6 col-md-5 col-xl-6 d-flex justify-content-end" data-aos="fade-up"
                        data-aos-duration="600" data-aos-offset="250" data-disable-parallax-down="md"><img
                            src="assets/img/landing/influencer/cta.png" width="457" alt="Influencer"></div>
                </div>
            </div>
        </section>

    </main>
    <!-- Footer-->
    <footer class="footer py-5">
        <div
            class="container d-flex flex-column flex-lg-row justify-content-between align-items-center pt-1 py-sm-2 py-lg-4 py-xl-5">
            <div class="d-flex mb-3 mb-sm-4 mb-lg-0">
                <a class="btn btn-outline-secondary btn-icon btn-sm btn-instagram me-3"
                    href="https://www.instagram.com/afeezabdulaziz/">
                    <i class="ai-instagram"></i>
                </a>
                <a class="btn btn-outline-secondary btn-icon btn-sm btn-tiktok me-3"
                    href="https://www.tiktok.com/@afeezabdulaziz">
                    <i class="ai-tiktok"></i>
                </a>
                <a class="btn btn-outline-secondary btn-icon btn-sm btn-youtube me-3"
                    href="https://www.youtube.com/@AfeezAbdulAziz">
                    <i class="ai-youtube"></i>
                </a>
                <a class="btn btn-outline-secondary btn-icon btn-sm btn-twitter me-3"
                    href="https://twitter.com/AfeezAziz">
                    <i class="ai-twitter"></i>
                </a>
                <a class="btn btn-outline-secondary btn-icon btn-sm btn-facebook me-3"
                    href="https://www.facebook.com/afeezaziz/">
                    <i class="ai-facebook"></i>
                </a>
                <a class="btn btn-outline-secondary btn-icon btn-sm btn-linkedin me-3"
                    href="https://www.linkedin.com/in/afeezaziz/">
                    <i class="ai-linkedin"></i>
                </a>
            </div>
            <div class="nav flex-sm-nowrap justify-content-center mb-3 mb-sm-4 mb-lg-0"></div>
            <p class="text-muted mb-0">&copy; All rights reserved</p>
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
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/vendor/aos/dist/aos.js"></script>
    <script src="/assets/vendor/simplebar/dist/simplebar.min.js"></script>
    <!-- Main theme script-->
    <script src="/assets/js/theme.min.js"></script>
</body>

</html>
