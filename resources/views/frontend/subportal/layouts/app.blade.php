<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SKPD - @yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset("frontend/subportal/assets/img/favicon.png")}}" rel="icon">
  <link href="{{ asset("frontend/subportal/assets/img/apple-touch-icon.png")}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset("frontend/subportal/assets/vendor/animate.css/animate.min.css")}}" rel="stylesheet">
  <link href="{{ asset("frontend/subportal/assets/vendor/aos/aos.css")}}" rel="stylesheet">
  <link href="{{ asset("frontend/subportal/assets/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
  <link href="{{ asset("frontend/subportal/assets/vendor/bootstrap-icons/bootstrap-icons.css")}}" rel="stylesheet">
  <link href="{{ asset("frontend/subportal/assets/vendor/boxicons/css/boxicons.min.css")}}" rel="stylesheet">
  <link href="{{ asset("frontend/subportal/assets/vendor/glightbox/css/glightbox.min.css")}}" rel="stylesheet">
  <link href="{{ asset("frontend/subportal/assets/vendor/swiper/swiper-bundle.min.css")}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset("frontend/subportal/assets/css/style.css")}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mamba
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  @include('frontend.subportal.partial.topbar')

  <!-- ======= Header ======= -->
  @include('frontend.subportal.partial.header')
  <!-- End Header -->

    @yield('content')

  @include('frontend.subportal.partial.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset("frontend/subportal/assets/vendor/purecounter/purecounter_vanilla.js")}}"></script>
  <script src="{{ asset("frontend/subportal/assets/vendor/aos/aos.js")}}"></script>
  <script src="{{ asset("frontend/subportal/assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <script src="{{ asset("frontend/subportal/assets/vendor/glightbox/js/glightbox.min.js")}}"></script>
  <script src="{{ asset("frontend/subportal/assets/vendor/isotope-layout/isotope.pkgd.min.js")}}"></script>
  <script src="{{ asset("frontend/subportal/assets/vendor/swiper/swiper-bundle.min.js")}}"></script>
  <script src="{{ asset("frontend/subportal/assets/vendor/php-email-form/validate.js")}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset("frontend/subportal/assets/js/main.js")}}"></script>

</body>

</html>
