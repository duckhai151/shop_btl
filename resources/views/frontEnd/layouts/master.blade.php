<!doctype html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('home/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('home/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/lightslider.min.css') }}">
</head>

<body>
    @include('frontEnd.layouts.header')

    @yield('content')

    @include('frontEnd.layouts.footer')
    
    <!-- jquery plugins here-->
    <script src="{{ asset('home/js/jquery-1.12.1.min.js') }}"></script>
    <script src="{{ asset('home/js/popper.min.js') }}"></script>
    <script src="{{ asset('home/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('home/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('home/js/swiper.min.js') }}"></script>
    <script src="{{ asset('home/js/masonry.pkgd.js') }}"></script>
    <script src="{{ asset('home/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('home/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('home/js/slick.min.js') }}"></script>
    <script src="{{ asset('home/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('home/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('home/js/contact.js') }}"></script>
    <script src="{{ asset('home/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('home/js/jquery.form.js') }}"></script>
    <script src="{{ asset('home/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('home/js/mail-script.js') }}"></script>
    <script src="{{ asset('home/js/custom.js') }}"></script>
    <script src="{{ asset('home/js/theme.js') }}"></script>
    <script src="{{ asset('home/js/lightslider.min.js') }}"></script>
    <script src="{{ asset('home/js/stellar.js') }}"></script>
</body>

</html>