<section id="team" class="team">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Perangkat Daerah</h2>
        <p>Website Profil Perangkat Daerah di Provinsi Jawa Barat.</p>
      </div>

      <div class="row">
        @foreach ($list_skpd as $item)
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
                <div class="member">
                <a href="{{ url( $item->slug )}}">
                <div class="pic"><img src="{{ $item->logo === null ? asset("frontend/portal/assets/img/jabar.png") : url("storage/".$item->logo ."")}}" class="img-fluid" alt=""></div>
                <div class="member-info">
                    <h4>{{ $item->name }}</h4>
                    <!-- Konten lainnya -->
                </div>
                </a>
                <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-tiktok"></i></a>
                    <a href=""><i class="bi bi-youtube"></i></a>
                </div>
                </div>
            </div>
        @endforeach

      </div>

    </div>
</section>
