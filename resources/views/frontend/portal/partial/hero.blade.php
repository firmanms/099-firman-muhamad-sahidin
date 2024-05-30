<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
                <!-- Slide first -->
                <div class="carousel-item active" style="background-image: url('{{ $first_slide->image === null ? asset("frontend/portal/assets/img/slide/default.jpg") : url("storage/".$first_slide->image ."")}}');">
                    <div class="carousel-container">
                    <div class="carousel-content container">
                        <h2 class="animate__animated animate__fadeInDown">{{ $first_slide->title }}</h2>
                        <p class="animate__animated animate__fadeInUp">{{ $first_slide->subtitle }}</p>
                        {{-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> --}}
                    </div>
                    </div>
                </div>
            @foreach ($not_first as $item)
                <!-- Slide not first -->
                <div class="carousel-item" style="background-image: url('{{ $item->image === null ? asset("frontend/portal/assets/img/slide/default.jpg") : url("storage/".$item->image ."")}}');">
                    <div class="carousel-container">
                    <div class="carousel-content container">
                        <h2 class="animate__animated animate__fadeInDown">{{ $item->title }}</span></h2>
                        <p class="animate__animated animate__fadeInUp">{{ $item->subtitle }}</p>
                        {{-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> --}}
                    </div>
                    </div>
                </div>
            @endforeach
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
