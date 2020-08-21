<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Faftech - Developer</title>
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

<!-- ======= Intro Section ======= -->
<section id="intro">
    @include('pages.users.layout.components.introcarousel')
</section>
<!-- End Intro Section -->

<main id="main">

    <!-- ======= Featured Services Section Section ======= -->
    <section id="featured-services">
        @include('pages.users.layout.components.featureservice')
    </section>
    <!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about">
        @include('pages.users.layout.components.aboutus')
    </section>
    <!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
        @include('pages.users.layout.components.services')
    </section>
    <!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
        @include('pages.users.layout.components.calltoaction')
    </section>
    <!-- End Call To Action Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills">
        @include('pages.users.layout.components.skills')
    </section>
    <!-- End Skills Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts">
        @include('pages.users.layout.components.facts')
    </section>
    <!-- End Facts Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="section-bg">
        @include('pages.users.layout.components.portfolio')
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Our Clients Section ======= -->
    <section id="clients">
        @include('pages.users.layout.components.ourclients')
    </section>
    <!-- End Our Clients Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="section-bg">
        @include('pages.users.layout.components.testimonials')
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        @include('pages.users.layout.components.team')
    </section>
    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg">
        @include('pages.users.layout.components.contactus')
    </section>
    <!-- End Contact Section -->

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
