<!-- Browser Default Validation -->
<div>
<form class="row g-3">
    <div class="col-md-12">
        <input type="hidden" class="form-control @error('site_id') is-invalid @enderror" id="validationDefault01"
                 placeholder="Enter title" wire:model="site_id">
          <label for="validationDefault01" class="form-label">Judul</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="validationDefault01"
                 placeholder="Enter title" wire:model="title">
          @error('title')
          <span class="text-danger">{{ $message }}</span>
          @enderror
      </div>
      <div class="col-md-12">
        <label for="validationDefault02" class="form-label">Sub Judul</label>
        <textarea class="form-control @error('subtitle') is-invalid @enderror" id="validationDefault01"
               placeholder="Enter subtitle" wire:model="subtitle" style="height: 150px">
        </textarea>
        @error('subtitle')
        <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-12">
        <label for="validationDefault03" class="form-label">Gambar</label>
        <input type="file" class="form-control @error('image') is-invalid @enderror" id="validationDefault01"
               placeholder="Enter image" wire:model="image">
        @error('image')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        {{-- <img src="{{ url('storage/'.$oldimage .'') }}" width="100%"> --}}
      </div>

  <div class="col-12">
      <button wire:click.prevent="update()" class="btn btn-primary">Ubah</button>
      <button wire:click.prevent="cancel()" class="btn btn-secondary btn-block">Batal</button>
  </div>
</form>
</div>
<!-- End Browser Default Validation -->
