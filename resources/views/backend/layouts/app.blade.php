<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Backend - @yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset("frontend/portal/assets/img/jabar.png")}}" rel="icon">
  <link href="{{ asset("frontend/portal/assets/img/jabar.png")}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset("backend/assets/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
  <link href="{{ asset("backend/assets/vendor/bootstrap-icons/bootstrap-icons.css")}}" rel="stylesheet">
  <link href="{{ asset("backend/assets/vendor/boxicons/css/boxicons.min.css")}}" rel="stylesheet">
  <link href="{{ asset("backend/assets/vendor/quill/quill.snow.css")}}" rel="stylesheet">
  <link href="{{ asset("backend/assets/vendor/quill/quill.bubble.css")}}" rel="stylesheet">
  <link href="{{ asset("backend/assets/vendor/remixicon/remixicon.css")}}" rel="stylesheet">
  <link href="{{ asset("backend/assets/vendor/simple-datatables/style.css")}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset("backend/assets/css/style.css")}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  @livewireStyles
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      @if(Auth::user()->role->name === 'Admin')
      <a href="{{ route('admin.dashboard') }}" class="logo d-flex align-items-center">
        <img src="{{ asset("frontend/portal/assets/img/jabar.png")}}" alt="">
        <span class="d-none d-lg-block">MultiSite</span>
      </a>
      @else
      <a href="{{ route('user.dashboard') }}" class="logo d-flex align-items-center">
        <img src="{{ asset("frontend/portal/assets/img/jabar.png")}}" alt="">
        <span class="d-none d-lg-block">MultiSite</span>
      </a>
      @endif
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <!--<div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div> End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ asset("frontend/portal/assets/img/jabar.png")}}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ Auth::user()->name }}</h6>
              {{-- <span>{{ Auth::user()->name }}</span> --}}
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              @if(Auth::user()->role->name === 'Admin')
              <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.profile') }}">
                <i class="bi bi-person"></i>
                <span>Profil Saya</span>
              </a>
              @else
              <a class="dropdown-item d-flex align-items-center" href="{{ route('user.profile') }}">
                <i class="bi bi-person"></i>
                <span>Profil Saya</span>
              </a>
              @endif
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            {{-- <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li> --}}
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Butuh Bantuan?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
              <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                <i class="bi bi-box-arrow-right"></i>
                <span>Keluar</span>
              </a>
              </form>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  @include("backend.shared.sidebar")

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>@yield('title')</h1>
      <nav>
        <ol class="breadcrumb">
          @if(Auth::user()->role->name === 'Admin')
          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
          @else
          <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Home</a></li>
          @endif
          <li class="breadcrumb-item active">@yield('title')</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    @yield("content")

  </main><!-- End #main -->

  @include("backend.shared.footer")

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  @livewireScripts
  <!-- Vendor JS Files -->
  <script src="{{ asset("backend/assets/vendor/apexcharts/apexcharts.min.js")}}"></script>
  <script src="{{ asset("backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <script src="{{ asset("backend/assets/vendor/chart.js/chart.umd.js")}}"></script>
  <script src="{{ asset("backend/assets/vendor/echarts/echarts.min.js")}}"></script>
  <script src="{{ asset("backend/assets/vendor/quill/quill.js")}}"></script>
  <script src="{{ asset("backend/assets/vendor/simple-datatables/simple-datatables.js")}}"></script>
  <script src="{{ asset("backend/assets/vendor/tinymce/tinymce.min.js")}}"></script>
  <script src="{{ asset("backend/assets/vendor/php-email-form/validate.js")}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset("backend/assets/js/main.js")}}" defer></script>

</body>

</html>
