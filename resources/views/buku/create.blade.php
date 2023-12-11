
@extends('master1')
@section('isi')
<div class="container" >
    <div class="row" >
        <div class="col-md-12">

            <h2 class="mt-3">Tambahkan Buku</h2>
            <form action="{{ route('buku.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label class="control-label col-sm-2" for="buku">Buku</label>
                    <input type="text" class="form-control" name="buku" id="buku" placeholder="Masukan Buku">
                </div>
                <div class="form-group mb-3">
                    <label for="nama_buku">Nama Buku</label>
                    <input type="text" class="form-control" name="nama_buku" id="nama_buku" placeholder="Masukan Nama Buku">
                </div>
                <div class="form-group mb-3">
                    <label>Kategori Buku</label>
                    <select class="form-control" name="kategori_buku">
                        <option value="">Pilih Kategori Buku</option>
                        <option value="buku_pendidikan">Buku Pendidikan</option>
                        <option value="buku_cerita">Buku Cerita</option>            
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="tahun_buku">Tahun Buku</label>
                    <input type="date" class="form-control" name="tahun_buku" id="tahun_buku" placeholder="Matusuka Tahun Buku">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="reset" class="btn btn-warning">Close</button>
            </form>
        </div>
    </div>
</div>
@endsection

