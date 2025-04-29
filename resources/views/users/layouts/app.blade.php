<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from htmldemo.net/juta/juta-v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Apr 2025 06:05:07 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title')</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <!-- all CSS hear -->
    <link rel="stylesheet" href="{{url('/frontend')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/frontend')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('/frontend')}}/css/ionicons.min.css">
    <link rel="stylesheet" href="{{url('/frontend')}}/css/animate.css">
    <link rel="stylesheet" href="{{url('/frontend')}}/css/nice-select.css">
    <link rel="stylesheet" href="{{url('/frontend')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('/frontend')}}/css/mainmenu.css">
    <link rel="stylesheet" href="{{url('/frontend')}}/css/style.css">
    <link rel="stylesheet" href="{{url('/frontend')}}/css/responsive.css">
    <script src="{{url('/frontend')}}/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience. Thanks</p>
    <![endif]-->
    <!-- Add your application content here -->

    <div class="wrapper">
        @yield('header')

        @yield('main_content')

        @yield('footer')

        @yield('modal')
    </div>


    <!-- jQuery JS -->
    <script src="{{url('/frontend')}}/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="{{url('/frontend')}}/js/vendor/jquery-migrate-3.3.0.min.js"></script>


    <!-- all plugins JS hear -->
    <script src="{{url('/frontend')}}/js/bootstrap.min.js"></script>
    <script src="{{url('/frontend')}}/js/owl.carousel.min.js"></script>
    <script src="{{url('/frontend')}}/js/jquery.mainmenu.js"></script>
    <script src="{{url('/frontend')}}/js/ajax-email.js"></script>
    <script src="{{url('/frontend')}}/js/plugins.js"></script>
    <!-- main JS -->
    <script src="{{url('/frontend')}}/js/main.js"></script>
</body>

<!-- Mirrored from htmldemo.net/juta/juta-v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Apr 2025 06:05:38 GMT -->
</html>
