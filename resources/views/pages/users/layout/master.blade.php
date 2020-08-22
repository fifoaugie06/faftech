<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>FAFTech - Developer</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('template/assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('template/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
          rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('template/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('template/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('template/assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('template/assets/vendor/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('template/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('template/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('template/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('template/assets/vendor/aos/aos.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('template/assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
    @include('pages.users.layout.components.header')
</header>
<!-- End Header -->

@yield('intro', null)

<main id="main">

    @yield('main')

</main>
<!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    @include('pages.users.layout.components.footer')
</footer>
<!-- End Footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- Uncomment below i you want to use a preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{asset('template/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('template/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('template/assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('template/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('template/assets/vendor/counterup/counterup.min.js')}}"></script>
<script src="{{asset('template/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('template/assets/vendor/venobox/venobox.min.js')}}"></script>
<script src="{{asset('template/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('template/assets/vendor/aos/aos.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('template/assets/js/main.js')}}"></script>

</body>

</html>
