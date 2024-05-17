<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('{{ asset("frontend/portal/assets/img/slide/slide-1.jpg")}}');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Selamat datang <span>di Multisite</span></h2>
                <p class="animate__animated animate__fadeInUp">Multisite Perangkat Daerah merupakan implementasi dari standardisasi website seluruh perangkat daerah di lingkungan Pemerintah Provinsi Jawa Barat.</p>
                {{-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> --}}
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('{{ asset("frontend/portal/assets/img/slide/slide-2.jpg")}}');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Manfaat Multisite</h2>
                <p class="animate__animated animate__fadeInUp">Memudahkan Perangkat Daerah yang ingin membuat atau membangun ulang websitenya.</p>
                {{-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> --}}
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('{{ asset("frontend/portal/assets/img/slide/slide-3.jpg")}}');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Maintenance efisien</h2>
                <p class="animate__animated animate__fadeInUp">Maintenance server website menjadi lebih efisien, karena server multisite terpusat di satu server Diskominfo.</p>
                {{-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> --}}
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
</section>
