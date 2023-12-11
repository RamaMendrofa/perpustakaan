@extends('master1')
@section('isi')

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Data Peminjaman</h2>
                <p><a class="btn btn-primary" href="{{ route('peminjamanbuku.create') }}">Tambah Data Peminjaman</a></p>
                @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @endif

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <TH>Buku_Id</TH>
                            <th>Id Peminjaman</th>
                            <th>Id Pengembalian</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Pengembalian</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($peminjamanbuku as $b)
                        <tr>
                            <td>{{$b->id}}</td>
                            <td>{{$b->id_peminjaman}}</td>
                            <td>{{$b->id_pengembalian}}</td>
                            <td>{{$b->tanggal_peminjaman}}</td>
                            <td>{{$b->tanggal_pengembalian}}</td>
                            <td>{{$b->buku->buku}}</td>
                            <td><a class="btn btn-warning" href="{{ route('peminjamanbuku.edit', $b->id) }}">Edit</a> </td>
                            <td>
                                <form onsubmit="return confirm('Apakah anda yakin?');"
                                    action="{{ route('peminjamanbuku.destroy', $b->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                </div>
                </div>
                <body>

                @endsection