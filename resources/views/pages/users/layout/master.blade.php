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
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-xl-11 d-flex align-items-center">
                <h1 class="logo mr-auto"><a href="index.html">FAFTech</a></h1>

                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#team">Team</a></li>
                        <li class="drop-down"><a href="">Drop Down</a>
                            <ul>
                                <li><a href="#">Drop Down 1</a></li>
                                <li><a href="#">Drop Down 3</a></li>
                                <li><a href="#">Drop Down 4</a></li>
                                <li><a href="#">Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#contact">Contact Us</a></li>

                    </ul>
                </nav>
                <!-- .nav-menu -->

            </div>
        </div>

    </div>
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
        <div class="container text-center" data-aos="zoom-in">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum.</p>
            <a class="cta-btn" href="#">Call To Action</a>
        </div>
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
        <div class="container" data-aos="zoom-in">

            <header class="section-header">
                <h3>Our Clients</h3>
            </header>

            <div class="owl-carousel clients-carousel">
                <img src="{{asset('template/assets/img/clients/client-1.png')}}" alt="">
                <img src="{{asset('template/assets/img/clients/client-2.png')}}" alt="">
                <img src="{{asset('template/assets/img/clients/client-3.png')}}" alt="">
            </div>

        </div>
    </section><!-- End Our Clients Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="section-bg">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3>Testimonials</h3>
            </header>

            <div class="owl-carousel testimonials-carousel">

                <div class="testimonial-item">
                    <img src="{{asset('template/assets/img/testimonial-1.jpg')}}" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                    <p>
                        <img src="{{asset('template/assets/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                        Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        <img src="{{asset('template/assets/img/quote-sign-right.png')}}" class="quote-sign-right"
                             alt="">
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="{{asset('template/assets/img/testimonial-2.jpg')}}" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                    <p>
                        <img src="{{asset('template/assets/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram
                        malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                        <img src="{{asset('template/assets/img/quote-sign-right.png')}}" class="quote-sign-right"
                             alt="">
                    </p>
                </div>

            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h3>Team</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{asset('template/assets/img/team-1.jpg')}}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-google-plus"></i></a>
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h3>Contact Us</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Address</h3>
                        <address>A108 Adam Street, NY 535022, USA</address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Phone Number</h3>
                        <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:info@example.com">info@example.com</a></p>
                    </div>
                </div>

            </div>

            <div class="form">
                <form action="{{asset('template/forms/contact.php')}}" method="post" role="form" class="php-email-form">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                   data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                            <div class="validate"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                   data-rule="email" data-msg="Please enter a valid email"/>
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                               data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"/>
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required"
                                  data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center">
                        <button type="submit">Send Message</button>
                    </div>
                </form>
            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-info">
                    <h3>BizPage</h3>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                        valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet
                        proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>

                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum
                        dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>BizPage</strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
          -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- Uncomment below i you want to use a preloader -->
<!-- <div id="preloader"></div> -->

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
