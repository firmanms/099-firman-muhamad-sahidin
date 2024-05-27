<!-- Browser Default Validation -->
<div>
<form class="row g-3">
    <div class="col-md-12">
        <label for="validationDefault01" class="form-label">Nama User</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="validationDefault01"
               placeholder="Enter name" wire:model="name">
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-12">
      <label for="validationDefault02" class="form-label">Email User</label>
      <input type="text" class="form-control @error('email') is-invalid @enderror" id="validationDefault02"
             placeholder="Enter email" wire:model="email">
      @error('email')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="col-md-12">
      <label for="validationDefault03" class="form-label">Password</label>
      <input type="ppassword" class="form-control @error('ppassword') is-invalid @enderror" id="validationDefault03"
             placeholder="Enter password" wire:model="ppassword">
      @error('ppassword')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="col-md-12">
      <label for="validationDefault04" class="form-label">Nama SKPD</label>
      <input type="text" class="form-control @error('sitename') is-invalid @enderror" id="validationDefault04"
             placeholder="Enter name" wire:model="sitename">
      @error('sitename')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="col-md-12">
      <label for="validationDefault05" class="form-label">Singkatan SKPD</label>
      <input type="text" class="form-control @error('singkatan') is-invalid @enderror" id="validationDefault05"
             placeholder="Enter name" wire:model="singkatan">
      @error('singkatan')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
  <div class="col-12">
      <button wire:click.prevent="store()" class="btn btn-primary">Tambah</button>
      <button wire:click.prevent="cancel()" class="btn btn-secondary btn-block">Batal</button>
  </div>
</form>
</div>
<!-- End Browser Default Validation -->
