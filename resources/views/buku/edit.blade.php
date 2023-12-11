@extends('master1')
@section('isi')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>Edit Buku</h2>
      <form action="{{ route('buku.update', $buku->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3 ">
          <label for="buku">Id Buku</label>
          <input type="text" class="form-control" name="buku" id="buku" value="{{ $buku->buku }}">
        </div>
        <div class="form-group mb-3">
          <label for="nama_buku">Nama Buku</label>
          <input type="text" class="form-control" name="nama_buku" id="nama_buku" value="{{ $buku->nama_buku }}">
        </div>
        <div class="form-group mb-3">
          <label for="tahun_buku">Tahun Buku</label>
          <input type="date" class="form-control" name="tahun_buku" id="tahun_buku" value="{{ $buku->tahun_buku }}">
        </div>

        <div class="form-group mb-3">
                    <label>kategori Buku</label>
                    <select class="form-control" name="kategori_buku">
                        <option value="">Pilih Kategori Buku</option>
                        <option value="Buku pendidikan" {{ $buku->kategori_buku == 'pendidikan' ? 'selected' : '' }}>Buku pendidikan</option>
                        <option value="Buku Cerita" {{ $buku->kategori_buku == 'Buku Cerita' ? 'selected' : '' }}>Buku Cerita</option>
                    </select>
                </div>
        </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="reset" class="btn btn-warning">Reset</button>
      </form>
    </div>
  </div>
</div>
@endsection