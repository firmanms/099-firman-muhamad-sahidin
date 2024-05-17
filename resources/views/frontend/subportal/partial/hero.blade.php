<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active"
                    style="background-image: url('{{ asset('frontend/subportal/assets/img/slide/slide-1.jpg') }}');">
                    <div class="carousel-container">
                        <div class="carousel-content container">
                            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Mamba</span></h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                vel. Minus et tempore modi architecto.</p>
                            {{-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a> --}}
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item"
                    style="background-image: url('{{ asset('frontend/subportal/assets/img/slide/slide-2.jpg') }}');">
                    <div class="carousel-container">
                        <div class="carousel-content container">
                            <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                vel. Minus et tempore modi architecto.</p>
                            {{-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a> --}}
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item"
                    style="background-image: url('{{ asset('frontend/subportal/assets/img/slide/slide-3.jpg') }}');">
                    <div class="carousel-container">
                        <div class="carousel-content container">
                            <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                vel. Minus et tempore modi architecto.</p>
                            {{-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a> --}}
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
