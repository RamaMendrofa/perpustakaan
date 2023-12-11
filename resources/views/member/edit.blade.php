@extends('master2')
@section('isi')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>Edit Buku</h2>
      <form action="{{ route('member.update', $member->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
                    <label class="control-label col-sm-2" for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="{{ $member->nama }}">
                </div>
                <div for="jenis_kelamin" class="form-group">
                <label>Jenis Kelamin</label>
                <div class="radio">
                <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki" {{ $member->jenis_kelamin=='laki-laki' ? 'checked' : '' }}>
                <label class="form-check-label">
                laki-laki
                </label>
                <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan" {{ $member->jenis_kelamin=='perempuan' ? 'checked' : '' }}>
                <label class="form-check-label">perempuan</label>
                </div>
                </div>
                <div class="form-group mb-3">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $member->alamat }}">
                </div>
                <div class="form-group mb-3">
                    <label for="telepon">Telepon</label>
                    <input type="text" class="form-control" name="telepon" id="telepon" value="{{ $member->telepon }}">
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ $member->email }}">
                </div>
                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="password" id="password" value="{{ $member->password }}">
                </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="reset" class="btn btn-warning">Reset</button>
      </form>
    </div>
  </div>
</div>
@endsection