@extends('pages.users.layout.master')

@section('intro')
    <!-- ======= Intro Section ======= -->
    <section id="intro">
        @include('pages.users.layout.components.introcarousel')
    </section>
    <!-- End Intro Section -->
@endsection

@section('main')
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
@endsection
