@extends('master2')
@section('isi')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-3">Edit Admin</h2>
      <form action="{{ route('admin.update', $admin->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
        <div class="form-group mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama"value="{{ $admin->nama }}">
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ $admin->email }}">
                </div>

                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="password" id="password" value="{{ $admin->password }}">
                </div>
                <div class="form-group mb-3 mt-3">
                    <label class="control-label col-sm-2" for="username">Usernama</label>
                    <input type="text" class="form-control" name="username" id="username" value="{{ $admin->username }}">
                </div>
                <div class="form-group mb-3">
                    <label for="telepon">telepon</label>
                    <input type="date" class="form-control" name="telepon" id="telepon" value="{{ $admin->telepon }}"
                ></input>
                </div>
                </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="reset" class="btn btn-warning">Reset</button>
      </form>
    </div>
  </div>
</div>
@endsection