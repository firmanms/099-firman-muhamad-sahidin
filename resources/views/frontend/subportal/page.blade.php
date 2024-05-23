@extends('frontend.subportal.layouts.app')

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Halaman</h2>
                    <ol>
                        <li><a href="{{ url( $sites->slug )}}">Home</a></li>
                        <li><a href="{{ url( $sites->slug )}}">Halaman</a></li>
                        <li>{{ucfirst($slugpages)}}</li>
                    </ol>
                </div>

            </div>
        </section><!-- Breadcrumbs Section -->

        <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

          <div class="row">

            <div class="col-lg-12 entries">

              <article class="entry entry-single">

                <div class="entry-img">
                  <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                </div>

                <h2 class="entry-title">
                  <a href="blog-single.html">Halaman {{$slugpages}} {{$sites->name}}</a>
                </h2>

                {{-- <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                  </ul>
                </div> --}}

                <div class="entry-content">
                  Isi halaman {{$slugpages}} dari {{$sites->name}}

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
                    Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                  </p>
                </div>
              </div> End blog author bio -->



            </div><!-- End blog entries list -->



          </div>

        </div>
      </section><!-- End Blog Single Section -->

    </main><!-- End #main -->
@endsection
