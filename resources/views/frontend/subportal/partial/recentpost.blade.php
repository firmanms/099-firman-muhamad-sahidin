<section id="recent-blog-posts" class="recent-blog-posts sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Artikel/Berita Terbaru</h2>
            <p>{{ $sites->name }}</p>
        </div>

        <div class="row">

            @foreach ($list_post as $item)
            <div class="col-lg-4" style="margin-bottom: 30px;">
                <div class="post-box">
                <div class="post-img"><img src="{{ $item->image === null ? asset("frontend/portal/assets/img/portfolio/default.png") : url("storage/".$item->image ."")}}" class="img-fluid" alt=""></div>
                <span class="post-date">{{$item->date_publish}}</span>
                <h3 class="post-title">{{$item->title}}</h3>
                <a href="{{ url( $sites->slug )}}/blog/{{$item->slug}}" class="readmore stretched-link mt-auto"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section>
