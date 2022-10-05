@extends('home')

@section('main')

		<section id="hero" class="d-flex align-items-center">
			@include('container')
		</section>

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      @include('about')
    </section><!-- End About Section -->

    <!-- ======= About Video Section ======= -->
    <section id="about-video" class="about-video">
      @include('about-video')
    </section><!-- End About Video Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
			@include('services')
    </section><!-- End Sevices Section -->


    <!-- ======= Team Section ======= -->
    <!-- End Team Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      @include('faq')
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      @include('contact')
    </section><!-- End Contact Section -->

@endsection