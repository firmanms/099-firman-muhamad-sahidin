@extends('frontend.subportal.layouts.app')

@section('content')
    <!-- ======= Hero Section ======= -->
    @include('frontend.subportal.partial.hero')
    <!-- End Hero -->

    <main id="main">
        <!-- ======= About Us Section ======= -->
        @include('frontend.subportal.partial.about')
        <!-- End About Us Section -->

        <!-- ======= Our Team Section ======= -->
        @include('frontend.subportal.partial.team')
        <!-- End Our Team Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
        @include('frontend.subportal.partial.recentpost')
        <!-- End Recent Blog Posts Section -->

        <!-- ======= Related Link Section ======= -->
        {{-- @include('frontend.subportal.partial.relatedlink') --}}
        <!-- End Related Link Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        {{-- @include('frontend.subportal.partial.faq') --}}
        <!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Us Section ======= -->
        @include('frontend.subportal.partial.contact')
        <!-- End Contact Us Section -->
    </main><!-- End #main -->
@endsection
