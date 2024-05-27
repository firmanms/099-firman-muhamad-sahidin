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
        <section class="section">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Kelola <span>| User</span></h5>
                            <p>Modul untuk mengelola user</p>

                            <!-- Browser Default Validation -->
                            @if($updatePost)
                            @include('backend.livewire.usersite.update')
                            @else
                            @include('backend.livewire.usersite.create')
                            @endif
                            <!-- End Browser Default Validation -->

                        </div>
                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="card recent-sales overflow-auto">

                        <div class="card-body">
                            <h5 class="card-title">Daftar <span>| User</span></h5>
                            <div class="row mb-3">
                                <input type="text" class="form-control" placeholder="Cari" wire:model.live="search" />
                            </div>
                            <!-- Small tables -->
                            <table class="table table-sm">
                              <thead>
                                <tr>
                                  {{-- <th scope="col">#</th> --}}
                                  <th scope="col">
                                    {{-- <a href="#" wire:click.prevent="sortBy('name')">Name</a>
                                    @if($sortField === 'name')
                                        @if($sortAsc)
                                            &#9650;
                                        @else
                                            &#9660;
                                        @endif
                                    @endif --}}
                                    Nama
                                  </th>
                                  <th scope="col">Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($usersite as $item)
                                <tr>
                                    {{-- <th scope="row">{{$item->id}}</th> --}}
                                    <td>{{$item->name}}</td>
                                    <td>
                                        <button wire:click="edit({{ $item->id }})" class="btn btn-primary btn-sm">Edit</button>
                                        <button wire:click="destroy({{ $item->id }})" wire:confirm="Kamu yakin akan menghapus data ini ?" class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                            <!-- End small tables -->
                            {{ $usersite->links() }}

                        </div>

                    </div>

                </div>
            </div>
        </section>

        {{-- <script>
            function deleteCategory(id){
                console.log(id)
                if(confirm("Are you sure to delete this record?")){
                    window.livewire.emit('deleteCategory',id);
                }
            }
        </script> --}}

</div>
