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
                            <h5 class="card-title">Kelola <span>| Kategori</span></h5>
                            <p>Modul untuk mengelola Kategori Postingan</p>

                            <!-- Browser Default Validation -->
                            @if($updatePost)
                            @include('backend.livewire.post-category.update')
                            @else
                            @include('backend.livewire.post-category.create')
                            @endif
                            <!-- End Browser Default Validation -->

                        </div>
                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="card recent-sales overflow-auto">

                        <div class="card-body">
                            <h5 class="card-title">Daftar <span>| Kategori</span></h5>

                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($posts_category as $item)
                                    <div wire:key="{{ 'prefix' . $item->id }}"> 
                                        <tr>
                                            <th scope="row">{{ $item->id }}</th>
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                <button wire:click="edit({{ $item->id }})"
                                                    class="btn btn-primary btn-sm">Edit</button>
                                                <button wire:click="destroy({{ $item->id }})"
                                                    class="btn btn-danger btn-sm">Delete</button>
                                            </td>
                                        </tr>
                                    </div>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data Kategori belum Tersedia.
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>

                        </div>

                    </div>

                </div>
            </div>
        </section>

</div>
