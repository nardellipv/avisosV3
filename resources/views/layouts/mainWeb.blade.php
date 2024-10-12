<!doctype html>
<html lang="es">

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Qayima is a modern presentation HTML5 Listing & Directory Template.">
    <meta name="keywords" content="HTML5, Template, Design, Listing, Directory, Listing Template" />
    <meta name="author" content="creative-wp">

    <!-- Specific Meta
    ================================================== -->
    <title>Qayima - Listing & Directory HTML Template</title>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="assets/web/images/favicon.ico">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/web/images/android-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/web/images/apple-icon-144x144.png') }}">

    <!-- Custom Font
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,500i,600,700,800,900&display=swap" rel="stylesheet">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('assets/web/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/simple-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/trackpad-scroll-emulator.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/jquery.datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/rangeslider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/jquery.datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/jquery-steps.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/fontawesome.all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/custom.css') }}">

    <script src="{{ asset('assets/web/js/modernizr.min.js') }}"></script>
</head>

<body>

    <!--********************************************************-->
    <!--********************* SITE CONTENT *********************-->
    <!--********************************************************-->
    <div class="site-content">

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Site Header
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        @include('web.parts._menu')
        <!--~~~ Sticky Header ~~~-->
        <div id="sticky-header" class="sticky-header-one"></div><!--~./ end sticky header ~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Frontpage Banner Section
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        @include('web.parts._banner')

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Poular Categories Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        @yield('content')

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start SITE FOOTER
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        @include('web.parts._footer')
    </div><!--~~./ end site content ~~-->

    <!-- All The JS Files
    ================================================== -->
    <script src="{{ asset('assets/web/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/web/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery-validate.bootstrap-tooltip.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/SyoTimer.js') }}"></script>
    <script src="{{ asset('assets/web/js/theia-sticky-sidebar.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/ResizeSensor.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/packery-mode.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/simple-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/scrolla.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery.nav.js') }}"></script>
    <script src="{{ asset('assets/web/js/rangeslider.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery.trackpad-scroll-emulator.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery.datetimepicker.full.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/rater.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/jquery-steps.min.js') }}"></script>
    <script src="{{ asset('assets/web/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/web/js/main.js') }}"></script><!-- main-js -->
</body>
</html>
