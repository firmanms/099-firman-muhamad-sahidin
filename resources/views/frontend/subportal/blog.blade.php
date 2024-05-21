@extends('frontend.subportal.layouts.app')

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Blog</h2>
                    <ol>
                        <li><a href="{{ url( $sites->slug )}}">Home</a></li>
                        <li><a href="{{ url( $sites->slug )}}/blog">Blog</a></li>
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

                        @foreach ($list_post as $item)

                        <article class="entry">

                            <div class="entry-img">
                                <img src="{{ $item->image === null ? asset("frontend/portal/assets/img/portfolio/default.png") : url("storage/".$item->image ."")}}" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="{{ url( $sites->slug )}}/blog/{{$item->slug}}">{{$item->title}}</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="{{ url( $sites->slug )}}/blog/{{$item->slug}}">{{$sites->singkatan}}</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="{{ url( $sites->slug )}}/blog/{{$item->slug}}"><time datetime="2020-01-01">{{$item->date_publish}}</time></a></li>

                                </ul>
                            </div>

                            <div class="entry-content">
                                {{$item->description}}
                                <div class="read-more">
                                    <a href="{{ url( $sites->slug )}}/blog/{{$item->slug}}">Read More</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->

                        @endforeach


                        <div class="blog-pagination">
                            {{ $list_post->links() }}
                            {{-- <ul class="justify-content-center">
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                            </ul> --}}
                        </div>

                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <!--<h3 class="sidebar-title">Search</h3>
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
        </section><!-- End Blog Section -->
    </main><!-- End #main -->
@endsection
