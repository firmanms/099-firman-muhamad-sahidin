<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Hubungi Kami</h2>
      </div>

      <div class="row">

        <div class="col-lg-6 d-flex" data-aos="fade-up">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>Alamat</h3>
            <p>{{ $site->address }}</p>
          </div>
        </div>

        <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Kami</h3>
            <p>{{ $site->email }}</p>
          </div>
        </div>

        <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="info-box ">
            <i class="bx bx-phone-call"></i>
            <h3>Telepon Kami</h3>
            <p>{{ $site->telp }}
            <h3>Whatsapp</h3>
            {{ $site->whatsapp }}</p>
          </div>
        </div>

        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <iframe src="{{ $site->maps === null ? ("https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15843.606591552028!2d107.6187675!3d-6.9023643!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e64c8710213b%3A0xc98ef091ea4e89e8!2sKantor%20Pemerintah%20Daerah%20Provinsi%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1715831595996!5m2!1sid!2sid") : $site->maps }}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

      </div>

    </div>
</section>
