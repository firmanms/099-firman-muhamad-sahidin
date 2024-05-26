<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
            <div class="col-lg-6 video-box">
                <img src="{{ $sites->logo === null ? asset("frontend/subportal/assets/img/about.png") : url("storage/".$sites->logo ."")}}" class="img-fluid" alt="">
                <a href="{{ $sites->video_profile }}" class="venobox play-btn mb-4"
                    data-vbtype="video" data-autoplay="true"></a>
            </div>

            <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

                <div class="section-title">
                    <h2>Sambutan Kepala {{ $sites->name }}</h2>
                    <p>{{ $sites->greeting }}</p>
                </div>

                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <h4 class="title"><a href="">{{ $sites->name_leader}}</a></h4>
                </div>

            </div>
        </div>

    </div>
</section>
