<!DOCTYPE html>
    <html class="no-js" lang="zxx">
    <head>

<!-- Meta For Seo -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="author" content="{{ setting('site.author') }}">
    <meta name="description" content="@yield('description', setting('site.description'))">
    <meta name="keywords" content="@yield('keywords', setting('site.keywords'))">
    <meta name="robots" content="INDEX,FOLLOW">
    
<!-- Graph Meta -->
    <meta property="og:title" content="{{setting('site.title')}}">
    <meta property="og:description" content="{{setting('site.description')}}">
    <meta property="og:image" content="{{asset('assets/img/logo-2.png')}}">
    <meta property="og:type" content="website">
<!-- END META -->
    
<!-- Links -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/img/favicons/favicon.png')}}">
    <link rel="manifest" href="{{asset('assets/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileImage" content="{{asset('assets/img/favicons/favicon.png')}}">
    <meta name="theme-color" content="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">

<!-- Links Style -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Norican&amp;family=Poppins:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    
<!-- Title -->
    <title>@yield('title', setting('site.title'))</title>

    </head>

<!-- Preloader -->
    <body class="theme-gold">
    <div class="preloader"><button class="th-btn gold-btn preloaderCls">Cancel Preloader</button>
    <div class="preloader-inner"><img src="{{asset('assets/img/logo-2.png')}}" alt="logo smart" width="300px"> <span class="loader style2"></span>
    </div>
    </div>
<!-- Preloader -->

    @include('Parcial.navbar')
    @yield('content')
    @include('Parcial.footer')

<!-- Scroll  -->
    <div class="scroll-top style2"><svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
    style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
    </path>
    </svg>
    </div>

<!-- script Links java script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/tweenmax.min.js')}}"></script>
    <script src="{{asset('assets/js/nice-select.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

    </body>
    </html>    