<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>{{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="author" content="RomainSola">
    <!-- description -->
    <meta name="description" content="description">
    <!-- keywords -->
    <meta name="keywords" content="keywords">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}">
    <!-- animation -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <!-- font-awesome icon -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
    <!-- themify icon -->
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <!-- swiper carousel -->
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <!-- justified gallery  -->
    <link rel="stylesheet" href="{{ asset('css/justified-gallery.min.css') }}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
    <!-- bootsnav -->
    <link rel="stylesheet" href="{{ asset('css/bootsnav.css') }}">
    <!-- style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
</head>

<body class="width-100">

    <!-- start header -->
    <header>

    </header>


    @yield('content')

    <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
    <!-- end scroll to top  -->
    <!-- javascript libraries -->
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/skrollr.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/smooth-scroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.appear.js') }}"></script>
    <!-- menu navigation -->
    <script type="text/javascript" src="{{ asset('js/bootsnav.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.nav.js') }}"></script>
    <!-- animation -->
    <script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
    <!-- page scroll -->
    <script type="text/javascript" src="{{ asset('js/page-scroll.js') }}"></script>
    <!-- swiper carousel -->
    <script type="text/javascript" src="{{ asset('js/swiper.min.js') }}"></script>
    <!-- counter -->
    <script type="text/javascript" src="{{ asset('js/jquery.count-to.js') }}"></script>
    <!-- parallax -->
    <script type="text/javascript" src="{{ asset('js/jquery.stellar.js') }}"></script>
    <!-- magnific popup -->
    <script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- portfolio with shorting tab -->
    <script type="text/javascript" src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <!-- images loaded -->
    <script type="text/javascript" src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- pull menu -->
    <script type="text/javascript" src="{{ asset('js/classie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/hamburger-menu.js') }}"></script>
    <!-- counter  -->
    <script type="text/javascript" src="{{ asset('js/counter.js') }}"></script>
    <!-- equalize -->
    <script type="text/javascript" src="{{ asset('js/equalize.min.js') }}"></script>
    <!-- skill bars  -->
    <script type="text/javascript" src="{{ asset('js/skill.bars.jquery.js') }}"></script>
    <!-- justified gallery  -->
    <script type="text/javascript" src="{{ asset('js/justified-gallery.min.js') }}"></script>
    <!--pie chart-->
    <script type="text/javascript" src="{{ asset('js/jquery.easypiechart.min.js') }}"></script>
    <!-- instagram -->
    <script type="text/javascript" src="{{ asset('js/instafeed.min.js') }}"></script>
    <!-- retina -->
    <script type="text/javascript" src="{{ asset('js/retina.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>
</html>