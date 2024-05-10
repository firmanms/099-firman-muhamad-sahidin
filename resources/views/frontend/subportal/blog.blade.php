@extends('frontend.subportal.layouts.app')

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Blog</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="portfolio.html">Blog</a></li>
                        <li>List Blog</li>
                    </ol>
                </div>

            </div>
        </section><!-- Breadcrumbs Section -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">

                        <article class="entry">

                            <div class="entry-img">
                                <img src="{{ asset('frontend/portal/assets/img/portfolio/portfolio-1.jpg') }}" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="{{ route('subportal.showpost') }}">Dolorum optio tempore voluptas dignissimos cumque fuga qui
                                    quibusdam quia</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="{{ route('subportal.showpost') }}">John Doe</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="{{ route('subportal.showpost') }}"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                            href="{{ route('subportal.showpost') }}">12 Comments</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi
                                    praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                                    Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est
                                    cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis
                                    dolore.
                                </p>
                                <div class="read-more">
                                    <a href="{{ route('subportal.showpost') }}">Read More</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->

                        <article class="entry">

                            <div class="entry-img">
                                <img src="{{ asset('frontend/portal/assets/img/portfolio/portfolio-2.jpg') }}" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="{{ route('subportal.showpost') }}">Nisi magni odit consequatur autem nulla dolorem</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="{{ route('subportal.showpost') }}">John Doe</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="{{ route('subportal.showpost') }}"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                            href="{{ route('subportal.showpost') }}">12 Comments</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Incidunt voluptate sit temporibus aperiam. Quia vitae aut sint ullam quis illum
                                    voluptatum et. Quo libero rerum voluptatem pariatur nam.
                                    Ad impedit qui officiis est in non aliquid veniam laborum. Id ipsum qui aut. Sit aliquam
                                    et quia molestias laboriosam. Tempora nam odit omnis eum corrupti qui aliquid excepturi
                                    molestiae. Facilis et sint quos sed voluptas. Maxime sed tempore enim omnis non alias
                                    odio quos distinctio.
                                </p>
                                <div class="read-more">
                                    <a href="{{ route('subportal.showpost') }}">Read More</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->

                        <article class="entry">

                            <div class="entry-img">
                                <img src="{{ asset('frontend/portal/assets/img/portfolio/portfolio-3.jpg') }}" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="{{ route('subportal.showpost') }}">Possimus soluta ut id suscipit ea ut. In quo quia et soluta
                                    libero sit sint.</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="{{ route('subportal.showpost') }}">John Doe</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="{{ route('subportal.showpost') }}"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                            href="{{ route('subportal.showpost') }}">12 Comments</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Aut iste neque ut illum qui perspiciatis similique recusandae non. Fugit autem dolorem
                                    labore omnis et. Eum temporibus fugiat voluptate enim tenetur sunt omnis.
                                    Doloremque est saepe laborum aut. Ipsa cupiditate ex harum at recusandae nesciunt. Ut
                                    dolores velit.
                                </p>
                                <div class="read-more">
                                    <a href="{{ route('subportal.showpost') }}">Read More</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->

                        <article class="entry">

                            <div class="entry-img">
                                <img src="{{ asset('frontend/portal/assets/img/portfolio/portfolio-1.jpg') }}" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="{{ route('subportal.showpost') }}">Non rem rerum nam cum quo minus. Dolor distinctio deleniti
                                    explicabo eius exercitationem.</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="{{ route('subportal.showpost') }}">John Doe</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="{{ route('subportal.showpost') }}"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                            href="{{ route('subportal.showpost') }}">12 Comments</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Aspernatur rerum perferendis et sint. Voluptates cupiditate voluptas atque quae. Rem
                                    veritatis rerum enim et autem. Saepe atque cum eligendi eaque iste omnis a qui.
                                    Quia sed sunt. Ea asperiores expedita et et delectus voluptates rerum. Id saepe ut
                                    itaque quod qui voluptas nobis porro rerum. Quam quia nesciunt qui aut est non omnis.
                                    Inventore occaecati et quaerat magni itaque nam voluptas. Voluptatem ducimus sint id
                                    earum ut nesciunt sed corrupti nemo.
                                </p>
                                <div class="read-more">
                                    <a href="{{ route('subportal.showpost') }}">Read More</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->

                        <div class="blog-pagination">
                            <ul class="justify-content-center">
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                            </ul>
                        </div>

                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Search</h3>
                            <div class="sidebar-item search-form">
                                <form action="">
                                    <input type="text">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->

                            <h3 class="sidebar-title">Categories</h3>
                            <div class="sidebar-item categories">
                                <ul>
                                    <li><a href="#">General <span>(25)</span></a></li>
                                    <li><a href="#">Lifestyle <span>(12)</span></a></li>
                                    <li><a href="#">Travel <span>(5)</span></a></li>
                                    <li><a href="#">Design <span>(22)</span></a></li>
                                    <li><a href="#">Creative <span>(8)</span></a></li>
                                    <li><a href="#">Educaion <span>(14)</span></a></li>
                                </ul>
                            </div><!-- End sidebar categories-->

                            <h3 class="sidebar-title">Recent Posts</h3>
                            <div class="sidebar-item recent-posts">
                                <div class="post-item clearfix">
                                    <img src="{{ asset('frontend/portal/assets/img/portfolio/portfolio-1.jpg') }}" alt="">
                                    <h4><a href="{{ route('subportal.showpost') }}">Nihil blanditiis at in nihil autem</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="{{ asset('frontend/portal/assets/img/portfolio/portfolio-2.jpg') }}" alt="">
                                    <h4><a href="{{ route('subportal.showpost') }}">Quidem autem et impedit</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="{{ asset('frontend/portal/assets/img/portfolio/portfolio-3.jpg') }}" alt="">
                                    <h4><a href="{{ route('subportal.showpost') }}">Id quia et et ut maxime similique occaecati ut</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="{{ asset('frontend/portal/assets/img/portfolio/portfolio-1.jpg') }}" alt="">
                                    <h4><a href="{{ route('subportal.showpost') }}">Laborum corporis quo dara net para</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="{{ asset('frontend/portal/assets/img/portfolio/portfolio-2.jpg') }}" alt="">
                                    <h4><a href="{{ route('subportal.showpost') }}">Et dolores corrupti quae illo quod dolor</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>

                            </div><!-- End sidebar recent posts-->

                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section><!-- End Blog Section -->
    </main><!-- End #main -->
@endsection
