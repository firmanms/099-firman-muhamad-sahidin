<!-- Browser Default Validation -->
<div>
<form class="row g-3">
  <div class="col-md-12">
      <label for="validationDefault01" class="form-label">Nama Kategori</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="validationDefault01"
             placeholder="Enter name" wire:model="name">
      @error('name')
      <span class="text-danger">{{ $message }}</span>
      @enderror
  </div>
  <div class="col-12">
      <button wire:click.prevent="update()" class="btn btn-primary">Ubah</button>
      <button wire:click.prevent="cancel()" class="btn btn-secondary btn-block">Batal</button>
  </div>
</form>
</div>
<!-- End Browser Default Validation -->