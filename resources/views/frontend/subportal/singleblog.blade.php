@extends('frontend.subportal.layouts.app')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Blog Details</h2>
                    <ol>
                        <li><a href="{{ url( $sites->slug )}}">Home</a></li>
                        <li><a href="{{ url( $sites->slug )}}/blog">Blog</a></li>
                        <li>{{$post->title}}</li>
                    </ol>
                </div>

            </div>
        </section><!-- Breadcrumbs Section -->

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">

                        <article class="entry entry-single">

                            <div class="entry-img">
                                <img src="{{ $post->image === null ? asset("frontend/portal/assets/img/portfolio/default.png") : url("storage/".$post->image ."")}}" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="{{ url( $sites->slug )}}/blog/{{$post->slug}}">{{$post->title}}</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="{{ url( $sites->slug )}}/blog/{{$post->slug}}">{{$sites->singkatan}}</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="{{ url( $sites->slug )}}/blog/{{$post->slug}}"><time datetime="2020-01-01">{{$post->date_publish}}</time></a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                {{$post->description}}

                            </div>

                            <div class="entry-footer">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a href="#">Business</a></li>
                                </ul>
                            </div>

                        </article><!-- End blog entry -->

                        <!--<div class="blog-author d-flex align-items-center">
                            <img src="{{ asset('frontend/portal/assets/img/team/team-1.jpg') }}" class="rounded-circle float-left" alt="">
                            <div>
                                <h4>Jane Smith</h4>
                                <div class="social-links">
                                    <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                                    <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                                    <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                                </div>
                                <p>
                                    Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium.
                                    Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium
                                    ut unde voluptas.
                                </p>
                            </div>
                        </div> End blog author bio -->

                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <!-- <h3 class="sidebar-title">Search</h3>
                            <div class="sidebar-item search-form">
                                <form action="">
                                    <input type="text">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div>End sidebar search formn-->

                            <!--<h3 class="sidebar-title">Categories</h3>
                            <div class="sidebar-item categories">
                                <ul>
                                    @foreach ($categories as $item)
                                    <li><a href="#">{{$item->name}} </a></li>
                                    @endforeach
                                </ul>
                            </div> End sidebar categories-->

                            <h3 class="sidebar-title">Recent Posts</h3>
                            <div class="sidebar-item recent-posts">

                                @foreach ($recentpost as $item)

                                <div class="post-item clearfix">
                                    <img src="{{ $item->image === null ? asset("frontend/portal/assets/img/portfolio/default.png") : url("storage/".$item->image ."")}}" alt="">
                                    <h4><a href="{{ url( $sites->slug )}}/blog/{{$item->slug}}">{{$item->title}}</a></h4>
                                    <time datetime="2020-01-01">{{$item->date_publish}}</time>
                                </div>

                                @endforeach

                            </div><!-- End sidebar recent posts-->

                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section><!-- End Blog Single Section -->

    </main><!-- End #main -->
@endsection
