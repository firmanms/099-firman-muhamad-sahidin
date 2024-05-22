<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="">{{ $sites->singkatan }}</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{ route('portal.index') }}">Portal</a></li>
          <li><a class="nav-link scrollto" href="{{ url( $sites->slug )}}">Home</a></li>
          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url( $sites->slug )}}/page/profil">Profil</a></li>
              <li><a href="{{ url( $sites->slug )}}/page/visi-dan-misi">Visi dan Misi</a></li>
              <li><a href="{{ url( $sites->slug )}}/page/struktur-organisasi">Struktur Organisasi</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{ url( $sites->slug )}}/blog">Berita</a></li>
          {{-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
</header>
