
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Around | 404 Error v.2</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Around - Multipurpose Bootstrap HTML Template">
    <meta name="keywords" content="bootstrap, business, corporate, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, saas, multipurpose, product landing, shop, software, ui kit, web studio, landing, dark mode, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link href="/assets/favicon/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180">
    <link href="/assets/favicon/favicon-32x32.png" rel="icon" type="image/png" sizes="32x32">
    <link href="/assets/favicon/favicon-16x16.png" rel="icon" type="image/png" sizes="16x16">
    <link href="/assets/favicon/site.webmanifest" rel="manifest">
    <link href="/assets/favicon/safari-pinned-tab.svg" rel="mask-icon" color="#6366f1">
    <meta name="msapplication-TileColor" content="#080032">
    <meta content="assets/favicon/browserconfig.xml" name="msapplication-config">
    <meta name="theme-color" content="#ffffff">
    <!-- Theme mode-->
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
      .page-loading.active > .page-loading-inner {
        opacity: 1;
      }
      .page-loading-inner > span {
        display: block;
        font-family: 'Inter', sans-serif;
        font-size: 1rem;
        font-weight: normal;
        color: #6f788b;
      }
      .dark-mode .page-loading-inner > span {
        color: #fff;
        opacity: .6;
      }
      .page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        background-color: rgba(68,140,116,.5); 
        border-radius: 50%;
        opacity: 0;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
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
      #lady {
        will-change: opacity, transform;
        transition: all .7s ease-in-out;
        transform: translateY(150px);
        opacity: 0;
      }
      #lady.show {
        transform: none;
        opacity: 1;
      }
      #bubble, #question {
        will-change: opacity, transform;
        transition: all .4s cubic-bezier(.68, -.55, .265, 1.55);
        transform: scale(.8);
        opacity: 0;
      }
      #question {
        transform: scale(.8) rotate(20deg);
      }
      #bubble.show,
      #question.show {
        transform: scale(1) rotate(0);
        opacity: 1;
      }
      
    </style>
    <!-- Page loading scripts-->
    <script>
      (function () {
        window.onload = function () {
          const preloader = document.querySelector('.page-loading');
          preloader.classList.remove('active');
          setTimeout(function () {
            preloader.remove();
          }, 1500);
          setTimeout(function () {
            document.getElementById('lady').classList.add('show');
          }, 300);
          setTimeout(function () {
            document.getElementById('question').classList.add('show');
          }, 1000);
          setTimeout(function () {
            document.getElementById('bubble').classList.add('show');
          }, 1600);
        };
      })();
      
    </script>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="/assets/css/theme.min.css">
    <!-- Google Tag Manager-->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
      
      
    </script>
  </head>
  <!-- Body-->
  <body>
    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="//www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!-- Page loading spinner-->
    <div class="page-loading active">
      <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Loading...</span>
      </div>
    </div>
    <!-- Page wrapper-->
    <main class="page-wrapper">
      <!-- Page content-->
      <div class="d-flex flex-column flex-lg-row justify-content-between min-vh-100 position-relative">
        <div class="position-absolute top-0 start-0 w-100 h-100 d-lg-none">
          <div class="d-dark-mode-none position-absolute top-0 start-0 w-100 h-100" style="background-color: #f2f3f7;"></div>
        </div>
        <div class="d-flex flex-column justify-content-center w-lg-50 position-relative zindex-2 mt-auto mt-lg-0">
          <div class="text-center text-lg-start pt-5 pb-3 py-lg-5 px-3 px-sm-4 px-lg-5 mx-auto" style="max-width: 630px;">
            <h1 class="display-1">Error - Page Not Found</h1>
            <p class="lead pb-2 mb-4 mb-lg-5">The page you are looking for was moved, removed or might never existed.</p><a class="btn btn-lg btn-primary" href="/">Go to homepage</a>
          </div>
        </div>
        <div class="d-flex flex-column position-relative justify-content-end align-items-center w-lg-50 position-relative overflow-hidden">
          <div class="position-absolute top-0 start-0 w-100 h-100 d-none d-lg-block">
            <div class="d-dark-mode-none position-absolute top-0 start-0 w-100 h-100" style="background-color: #f2f3f7;"></div>
            <div class="d-none d-dark-mode-block position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(255,255,255, .04);"></div>
          </div>
          <div class="position-relative zindex-2" style="max-width: 948px;"><img src="/assets/img/404/layer01.png" alt="Lady" id="lady"><img class="position-absolute top-0 start-0 w-100 h-100" src="assets/img/404/layer02-light.png" alt="Bubble" id="bubble">
            <div class="position-absolute top-0 start-0 w-100 h-100" id="question"><img class="d-dark-mode-none" src="assets/img/404/layer03-light.png" alt="Question mark"><img class="d-none d-dark-mode-block" src="assets/img/404/layer03-dark.png" alt="Question mark"></div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>