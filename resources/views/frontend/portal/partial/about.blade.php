<section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row no-gutters">
        <div class="col-lg-6 video-box">
          <img src="{{ asset("frontend/portal/assets/img/about.png")}}" class="img-fluid" alt="">
          <a href="{{ $site->video_profile }}" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
        </div>

        <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

          <div class="section-title">
            <h2>Tentang Kami</h2>
            <p style="text-align: justify;">{{ $site->greeting }}</p>
          </div>

          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bx bx-badge-check"></i></div>
            <h4 class="title"><a href="">Multisite Perangkat Daerah</a></h4>
            <p class="description">Implementasi dari standardisasi website seluruh perangkat daerah di lingkungan Pemerintah Provinsi Jawa Barat.</p>
          </div>

          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bx bx-badge-check"></i></div>
            <h4 class="title"><a href="">Manfaat Multisite</a></h4>
            <p class="description">Memudahkan Perangkat Daerah yang ingin membuat atau membangun ulang websitenya.</p>
          </div>

          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bx bx-badge-check"></i></div>
            <h4 class="title"><a href="">Maintenance efisien</a></h4>
            <p class="description">Maintenance server website menjadi lebih efisien, karena server multisite terpusat di satu server Diskominfo.</p>
          </div>

        </div>
      </div>

    </div>
</section>
