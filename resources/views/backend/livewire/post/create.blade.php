<!-- Browser Default Validation -->
<div>
<form class="row g-3">
  <div class="col-md-12">
    <input type="text" class="form-control @error('site_id') is-invalid @enderror" id="validationDefault01"
             placeholder="Enter title" wire:model="site_id" value="{{$site_id}}">
      <label for="validationDefault01" class="form-label">Judul</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="validationDefault01"
             placeholder="Enter title" wire:model="title">
      @error('title')
      <span class="text-danger">{{ $message }}</span>
      @enderror
  </div>
  <div class="col-md-12">
    <label for="validationDefault02" class="form-label">Isi Postingan</label>
    <textarea class="form-control @error('description') is-invalid @enderror" id="validationDefault01"
           placeholder="Enter description" wire:model="description" style="height: 150px">
    </textarea>
    @error('description')
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
  </div>
  <div class="col-md-6">
    <label for="validationDefault04" class="form-label">Tanggal Publish</label>
    <input type="date" class="form-control @error('date_publish') is-invalid @enderror" id="validationDefault01"
           placeholder="Enter date_publish" wire:model="date_publish">
    @error('date_publish')
    <span class="text-danger">{{ $message }}</span>
    @enderror
  </div>
  <div class="col-md-6">
    <label for="validationDefault04" class="form-label">Kategori</label>
    <select class="form-select @error('post_category_id') is-invalid @enderror" wire:model="post_category_id">
        @foreach ($post_category as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>
    @error('post_category_id')
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
