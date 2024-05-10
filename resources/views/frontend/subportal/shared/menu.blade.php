<nav id="navbar" class="navbar">
  <ul>
    <li><a class="nav-link scrollto" href="{{ route('portal.index') }}">Portal</a></li>
    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
    <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
      <ul>
        <li><a href="{{ route('subportal.showpage') }}">Profil</a></li>
        <li><a href="{{ route('subportal.showpage') }}">Visi dan Misi</a></li>
        <li><a href="{{ route('subportal.showpage') }}">Struktur Organisasi</a></li>
      </ul>
    </li>
    <li><a class="nav-link scrollto" href="{{ route('subportal.blog') }}">Berita</a></li>
    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
  </ul>
  <i class="bi bi-list mobile-nav-toggle"></i>
</nav>