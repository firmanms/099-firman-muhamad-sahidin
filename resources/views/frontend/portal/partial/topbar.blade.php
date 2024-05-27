<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:{{ $site->email }}">{{ $site->email }}</a>
        <i class="bi bi-phone-fill phone-icon"></i> {{ $site->telp }}
      </div>
      <div class="social-links d-none d-md-block">
        <a href="{{ $site->tw }}" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="{{ $site->fb }}" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="{{ $site->ig }}" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="{{ $site->tiktok }}" class="tiktok"><i class="bi bi-tiktok"></i></i></a>
        <a href="{{ $site->yt }}" class="youtube"><i class="bi bi-youtube"></i></i></a>
      </div>
    </div>
  </section>
