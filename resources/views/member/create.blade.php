@extends('master2')
@section('isi')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mt-3">Tambahkan Data Member</h2>
            <form action="{{ route('member.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                <label class="control-label col-sm-2" for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama">
                </div>
                <div for="jenis_kelamin" class="form-group mb-3">
                <label>Jenis_kelamin</label>
                <div class="radio">
                <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki">
                <label class="form-check-label"> laki-laki
                </label>
                <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan">
                <label class="form-check-label"> perempuan
                </label>
                </div>
                </div>
                <div class="form-group mb-3 mt-3">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukan Alamat">
                </div>
                <div class="form-group mb-3">
                    <label for="telepon">Telepon</label>
                    <input type="text" class="form-control" name="telepon" id="telepon" placeholder="Masukan Telepon">
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="@Masukan Email">
                </div>
                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="password" id="password" placeholder="Masukan Password">
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
                <button type="reset" class="btn btn-warning">Close</button>
            </form>
        </div>
    </div>
</div>

@endsection