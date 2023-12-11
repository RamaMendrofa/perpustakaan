@extends('master2')
@section('isi')
<div class="container" >
    <div class="row" >
        <div class="col-md-12">

            <h2 class="mt-3">admin</h2>
            <form action="{{ route('admin.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan nama">
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Masukan Email">
                </div>

                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="password" id="password" placeholder="Masukan Password">
                </div>
                <div class="form-group mb-3 mt-3">
                    <label class="control-label col-sm-2" for="username">Usernama</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Masukan Username">
                </div>
                <div class="form-group mb-3">
                    <label for="telepon">telepon</label>
                    <input type="date" class="form-control" name="telepon" id="telepon" placeholder="Masukan telepon"></input>
                </div>
                
                
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="reset" class="btn btn-warning">Close</button>
            </form>
        </div>
    </div>
</div>

@endsection
