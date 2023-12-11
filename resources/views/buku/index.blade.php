@extends('master1')

@section('isi')

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <h2>BUKU</h2>
                <p><a class="btn btn-primary" href="{{ route('buku.create') }}">Tambah Data Buku</a></p>
                @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @endif

                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Buku</th>
                            <th>Nama Buku</th>
                            <th>Kategori Buku</th>
                            <th>Tahun Buku</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($buku as $b)
                        <tr>
                        <td>{{ $loop-> index + 1 }}</td>
                            <td>{{$b->buku}}</td>
                            <td>{{$b->nama_buku}}</td>
                            <td>{{$b->kategori_buku}}</td>
                            <td>{{$b->tahun_buku}}</td>
                            <td><a class="btn btn-warning" href="{{ route('buku.edit', $b->id) }}">Edit</a> </td>
                            <td>
                                <form onsubmit="return confirm('Apakah anda yakin?');"
                                    action="{{ route('buku.destroy', $b->id) }}" method="POST">
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