@extends('master2')
@section('isi')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h2 class="mt-3">Create Data Peminjaman</h2>
            <form action="{{ route('peminjamanbuku.update', $peminjamanbuku->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label class="control-label col-sm-2" for="id_peminjaman">Id Peminjaman</label>
                    <input type="text" class="form-control" name="id_peminjaman" id="id_peminjaman" value="{{ $peminjamanbuku->id_peminjaman }}">
                </div>
                <div class="form-group mb-3">
                    <label for="id_pengembalian">Id Pengembalian</label>
                    <input type="text" class="form-control" name="id_pengembalian" id="id_pengembalian" value="{{ $peminjamanbuku->id_pengembalian }}">
                </div>
                <div class="form-group mb-3">
                    <label for="tanggal_peminjaman">Tanggal Peminjaman</label>
                    <input type="date" class="form-control" name="tanggal_peminjaman" id="tanggal_peminjaman" value="{{ $peminjamanbuku->tanggal_peminjaman }}">
                </div>
                <div class="form-group mb-3">
                    <label for="tanggal_pengembalian">Tanggal Pengembalian</label>
                    <input type="date" class="form-control" name="tanggal_pengembalian" id="tanggal_pengembalian" value="{{ $peminjamanbuku->tanggal_pengembalian }}">
                </div>

<div class="form-group">
<label>Buku_id</label>
<select class="form-control" name="buku_id">
<option value="">Choose country</option>
@foreach($buku as $buku)
<option value="{{ $buku->id }}" {{ $peminjamanbuku->buku_id == $buku->id ? 'selected' : '' }}>
     {{ $buku->buku }}
</option>
@endforeach
</select>
</div>



                <button type="submit" class="btn btn-primary">Update</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </form>
        </div>
    </div>
</div>

@endsection