@extends("backend.layouts.app")

@section('title','Multisite Perangkat Daerah')
@section('content')

<section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-8">
        <div class="row">
          @if(Auth::user()->role->name === 'Admin')
          <!-- Pengguna Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">

              <div class="card-body">
                <h5 class="card-title">Pengguna </h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ $countuser }}</h6>
                    {{-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Pengguna Card -->

          <!-- Site Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">

              <div class="card-body">
                <h5 class="card-title">Site/SKPD </h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-diagram-3"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ $countsite }}</h6>
                    {{-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Site Card -->

          <!-- Postingan Card -->
          <div class="col-xxl-4 col-xl-12">

            <div class="card info-card customers-card">

            
              <div class="card-body">
                <h5 class="card-title">Postingan </h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-journal"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ $countpost }}</h6>
                    {{-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> --}}

                  </div>
                </div>

              </div>
            </div>

          </div><!-- End Postingan Card -->
        @else
          <div class="col-xxl-12 col-xl-12">

            <div class="card info-card customers-card">

            
              <div class="card-body">
                <h5 class="card-title">Postingan </h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-journal"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ $countpost }}</h6>
                    {{-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> --}}

                  </div>
                </div>

              </div>
            </div>

          </div><!-- End Postingan Card -->

        @endif

          <!-- site -->
          @if(Auth::user()->role->name === 'Admin')
          <div class="col-12">
            <div class="card top-selling overflow-auto">


              <div class="card-body pb-0">
                <h5 class="card-title">Daftar User dan Website SKPD</h5>

                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col">Logo Site</th>
                      <th scope="col">User</th>
                      <th scope="col">Site</th>
                      {{-- <th scope="col">Detail</th> --}}
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($listsite as $item)

                    <tr>
                        <th scope="row"><img src="{{ $item->image === null ? asset("frontend/portal/assets/img/jabar.png") : url("storage/".$item->image ."")}}" alt=""></th>
                        <td>{{ $item->users->pluck('name')->implode(', ') }}</td>

                        <td><a href="{{ url( $item->slug )}}" target="_blank" class="text-primary fw-bold">{{ $item->name }}</a></td>
                        {{-- <td class="fw-bold">124</td> --}}
                      </tr>
                    @endforeach
                  </tbody>
                </table>

              </div>

            </div>
          </div><!-- End site -->
          @endif

        </div>
      </div><!-- End Left side columns -->

      <!-- Right side columns -->
      <div class="col-lg-4">

        <!-- News & Updates Traffic -->
        <div class="card">
          
          <div class="card-body pb-0">
            <h5 class="card-title">Postingan <span>| Terbaru</span></h5>

            <div class="news" style="margin-bottom:25px;">
                @foreach ($list_post as $item)

                <div class="post-item clearfix">
                    <img src="{{ $item->image === null ? asset("frontend/portal/assets/img/portfolio/default.png") : url("storage/".$item->image ."")}}" alt="">
                    <h4><a href="#">{{$item->title}}</a></h4>
                    <p>{{$item->date_publish}}</p>
                </div>

                @endforeach

            </div><!-- End sidebar recent posts-->

          </div>
        </div><!-- End News & Updates -->

        <!-- Website Traffic 
        <div class="card">
          
          <div class="card-body pb-0">
            <h5 class="card-title">Website Traffic <span>| Today</span></h5>

            <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

            <script>
              document.addEventListener("DOMContentLoaded", () => {
                echarts.init(document.querySelector("#trafficChart")).setOption({
                  tooltip: {
                    trigger: 'item'
                  },
                  legend: {
                    top: '5%',
                    left: 'center'
                  },
                  series: [{
                    name: 'Access From',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    avoidLabelOverlap: false,
                    label: {
                      show: false,
                      position: 'center'
                    },
                    emphasis: {
                      label: {
                        show: true,
                        fontSize: '18',
                        fontWeight: 'bold'
                      }
                    },
                    labelLine: {
                      show: false
                    },
                    data: [{
                        value: 1048,
                        name: 'Search Engine'
                      },
                      {
                        value: 735,
                        name: 'Direct'
                      },
                      {
                        value: 580,
                        name: 'Email'
                      },
                      {
                        value: 484,
                        name: 'Union Ads'
                      },
                      {
                        value: 300,
                        name: 'Video Ads'
                      }
                    ]
                  }]
                });
              });
            </script>

          </div>
        </div> End Website Traffic -->



      </div><!-- End Right side columns -->

    </div>
  </section>

@endsection

@section('title')
Dashboard
@endsection
