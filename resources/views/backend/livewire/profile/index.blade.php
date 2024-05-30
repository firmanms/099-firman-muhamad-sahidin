<div>

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session()->get('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session()->get('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    {{-- @section('content') --}}
    <section class="section profile">
        <div class="row">
          <div class="col-xl-4">

            <div class="card">
              <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                <img src="{{ $profile->logo === null ? asset("frontend/portal/assets/img/jabar.png") : url("storage/".$profile->logo ."")}}" alt="Profile" class="rounded-circle">
                <h2>{{ $profile->singkatan }}</h2>
                <h3>{{ $profile->name }}</h3>
                <div class="social-links mt-2">
                  <a href="{{ $profile->tw }}" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="{{ $profile->fb }}" class="facebook"><i class="bi bi-facebook"></i></a>
                  <a href="{{ $profile->ig }}" class="instagram"><i class="bi bi-instagram"></i></a>
                  <a href="{{ $profile->tiktok }}" class="tiktok"><i class="bi bi-tiktok"></i></a>
                  <a href="{{ $profile->yt }}" class="youtube"><i class="bi bi-youtube"></i></a>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                <img src="{{ $profile->image_leader === null ? asset("frontend/subportal/assets/img/about.png") : url("storage/".$profile->image_leader ."")}}" alt="Profile" class="rounded-circle">
                <br>
                <h3><u>{{ $profile->name_leader }}</u></h3>
                <h2>Kepala</h2>
                <h3>{{ $profile->name }}</h3>

              </div>
            </div>

          </div>

          <div class="col-xl-8">

            <div class="card">
              <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">

                  {{-- <li class="nav-item" role="presentation">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview" aria-selected="true" role="tab">Overview</button>
                  </li> --}}

                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit" aria-selected="false" role="tab" tabindex="-1">Edit Profile</button>
                  </li>

                  <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password" aria-selected="false" role="tab" tabindex="-1">Ubah Password</button>
                  </li>

                </ul>
                <div class="tab-content pt-2">

                  {{--<div class="tab-pane fade profile-overview active show" id="profile-overview" role="tabpanel">
                    <h5 class="card-title">Sambutan</h5>
                    <p class="small fst-italic">{{ $profile->greeting }}</p>

                    <h5 class="card-title">Profile Details</h5>

                     <div class="row">
                      <div class="col-lg-3 col-md-4 label ">Nama Perangkat Daerah</div>
                      <div class="col-lg-9 col-md-8">{{ $profile->name }}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label ">Singkatan Perangkat Daerah</div>
                        <div class="col-lg-9 col-md-8">{{ $profile->singkatan }}</div>
                      </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Nama Pimpinan</div>
                      <div class="col-lg-9 col-md-8">{{ $profile->name_leader }}</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Alamat</div>
                      <div class="col-lg-9 col-md-8">{{ $profile->address }}</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Telp</div>
                      <div class="col-lg-9 col-md-8">{{ $profile->telp }}</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Whatsapp</div>
                        <div class="col-lg-9 col-md-8">{{ $profile->whatsapp }}</div>
                      </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Email</div>
                      <div class="col-lg-9 col-md-8">{{ $profile->email }}</div>
                    </div>

                  </div>--}}

                  <div class="tab-pane fade profile-edit pt-3  active show"" id="profile-edit" role="tabpanel">

                    <!-- Profile Edit Form -->
                    <form>

                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Perangkat Daerah</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="fullName" type="hidden" class="form-control" id="fullName" wire:model="site_id">
                          <input name="fullName" type="text" class="form-control" @error('name') is-invalid @enderror" id="fullName" wire:model="name">
                          @error('name')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Singkatan Perangkat Daerah</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="fullName" type="text" class="form-control" id="fullName" wire:model="singkatan">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Pimpinan</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="fullName" type="text" class="form-control" id="fullName" wire:model="name_leader"">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="about" class="col-md-4 col-lg-3 col-form-label">Sambutan</label>
                        <div class="col-md-8 col-lg-9">
                          <textarea name="about" class="form-control" id="about" style="height: 100px" wire:model="greeting"></textarea>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Address" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="address" type="text" class="form-control" id="Address" wire:model="address">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Telp</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="phone" type="text" class="form-control" id="Phone" wire:model="telp">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Whatsapp</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="phone" type="text" class="form-control" id="Phone" wire:model="whatsapp">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="email" type="email" class="form-control" id="Email" wire:model="email">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="twitter" type="text" class="form-control" id="Twitter" wire:model="tw">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="facebook" type="text" class="form-control" id="Facebook" wire:model="fb">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="instagram" type="text" class="form-control" id="Instagram" wire:model="ig">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Tiktok" class="col-md-4 col-lg-3 col-form-label">Tiktok Profile</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="tiktok" type="text" class="form-control" id="Tiktok" wire:model="tiktok">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Yt" class="col-md-4 col-lg-3 col-form-label">Youtube Profile</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="yt" type="text" class="form-control" id="Yt" wire:model="yt">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Yt" class="col-md-4 col-lg-3 col-form-label">Video Profile</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="yt" type="text" class="form-control" id="Yt" wire:model="video_profile">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Maps" class="col-md-4 col-lg-3 col-form-label">Lokasi Kantor</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="maps" type="text" placeholder="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15843.606591552028!2d107.6187675!3d-6.9023643!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e64c8710213b%3A0xc98ef091ea4e89e8!2sKantor%20Pemerintah%20Daerah%20Provinsi%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1715831595996!5m2!1sid!2sid" class="form-control" id="Maps" wire:model="maps">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Image_leader" class="col-md-4 col-lg-3 col-form-label">Foto Pimpinan</label>
                        <div class="col-md-8 col-lg-9" >
                          <input name="image_leader" type="file" class="form-control" id="Image_leader" wire:model="image_leader">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Logo" class="col-md-4 col-lg-3 col-form-label">Logo Perangkat Daerah</label>
                        <div class="col-md-8 col-lg-9">
                            <div wire:ignore>
                          <input name="logo" type="file" class="form-control" id="Logo" wire:model="logo">
                            </div>
                        </div>
                      </div>

                      <div class="text-center">
                        <button wire:click.prevent="update()" class="btn btn-primary">Simpan</button>
                      </div>
                    </form><!-- End Profile Edit Form -->

                  </div>

                  <div class="tab-pane fade pt-3" id="profile-change-password" role="tabpanel">
                    <!-- Change Password Form -->
                    @if(Auth::user()->role->name === 'Admin')
                    <form method="POST" action="{{ route('admin.password.update') }}">
                    @else
                    <form method="POST" action="{{ route('user.password.update') }}">
                    @endif
                        @csrf

                      <div class="row mb-3">
                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Password Lama</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror" id="currentPassword">
                            @error('current_password')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Password Baru</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPassword">
                            @error('new_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Ketik Ulang Password Baru</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="new_password_confirmation" type="password" class="form-control" id="renewPassword">
                        </div>
                      </div>

                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Ubah Password</button>
                      </div>
                    </form><!-- End Change Password Form -->

                  </div>

                </div><!-- End Bordered Tabs -->

              </div>
            </div>

          </div>
        </div>
      </section>

</div>
