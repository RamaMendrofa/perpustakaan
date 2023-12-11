@extends('master2')
@section('isi')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h2 class="mt-3">Create Data Peminjaman</h2>
            <form action="{{ route('peminjamanbuku.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label " for="id_peminjaman">Id Peminjaman</label>
                    <input type="text" class="form-control" name="id_peminjaman" id="id_peminjaman" placeholder="Masukan Id Peminjaman">
                </div>
                <div class="form-group mb-3">
                    <label for="id_pengembalian">Id Pengembalian</label>
                    <input type="text" class="form-control" name="id_pengembalian" id="id_pengembalian" placeholder="Masukan Id Pengembalian">
                </div>
                <div class="form-group mb-3">
                    <label for="tanggal_peminjaman">Tanggal Peminjaman</label>
                    <input type="date" class="form-control" name="tanggal_peminjaman" id="tanggal_peminjaman" placeholder="Tanggal Peminjaman">
                </div>
                <div class="form-group mb-3">
                    <label for="tanggal_pengembalian">Tanggal Pengembalian</label>
                    <input type="date" class="form-control" name="tanggal_pengembalian" id="tanggal_pengembalian" placeholder="Tanggal Pengembalian">
                </div>
          
                <div class="form-group mb-3">
                    <label>Pilih Buku</label>
                    <select class="form-control" name="buku_id">
                    <option value="">Choose </option>
                    @foreach($buku as $buku)
                    <option value="{{ $buku->id }}">
                    {{ $buku->buku }}
                    </option>
                    @endforeach
                    </select>
                    </div>

                <button type="submit" class="btn btn-primary">Save</button>
                <button type="reset" class="btn btn-warning">Close</button>
            </form>
        </div>
    </div>
</div>

@endsection