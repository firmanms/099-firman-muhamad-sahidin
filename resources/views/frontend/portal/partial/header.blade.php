<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="{{ route('portal.index') }}">Multisite</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
            <nav id="navbar" class="navbar">
                <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                <li><a class="nav-link scrollto" href="#team">SKPD</a></li>
                <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                @if (Route::has('login'))
                            
                                @auth
                                @if(Auth::user()->role->name === 'Admin')
                                <li><a class="nav-link scrollto" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                @else
                                <li><a class="nav-link scrollto" href="{{ route('user.dashboard') }}">Dashboard</a></li>
                                @endif
                                @else
                                <li><a class="nav-link scrollto" href="{{ route('admin.login') }}">Login</a></li>
                                @endauth
                @endif
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
    </div>
</header>
