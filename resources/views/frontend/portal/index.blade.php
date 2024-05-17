@extends('frontend.portal.layouts.app')

@section('title','Multisite Perangkat Daerah')
@section('content')
    <!-- ======= About Us Section ======= -->
    @include('frontend.portal.partial.about')
    <!-- End About Us Section -->

    <!-- ======= Our SKPD Section ======= -->
    @include('frontend.portal.partial.skpd')
    <!-- End Our SKPD Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    @include('frontend.portal.partial.recentpost')
    <!-- End Recent Blog Posts Section -->

    <!-- ======= related link Section ======= -->
    @include('frontend.portal.partial.relatedlink')
    <!-- End related link Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    @include('frontend.portal.partial.faq')
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Us Section ======= -->
    @include('frontend.portal.partial.contact')
    <!-- End Contact Us Section -->
@endsection
