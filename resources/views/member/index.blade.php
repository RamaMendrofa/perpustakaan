@extends('master1')
@section('isi')

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <h2>Member</h2>
                <p><a class="btn btn-primary" href="{{ route('member.create') }}">Tambah Data Member</a></p>
                @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @endif

                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($member as $b)
                        <tr>
                        <td>{{ $loop-> index + 1 }}</td>
                            <td>{{$b->nama}}</td>
                            <td>{{$b->jenis_kelamin}}</td>
                            <td>{{$b->alamat}}</td>
                            <td>{{$b->telepon}}</td>
                            <td>{{$b->email}}</td>
                            <td>{{$b->password}}</td>
                            <td><a class="btn btn-warning" href="{{ route('member.edit', $b->id) }}">Edit</a> </td>
                            <td>
                                <form onsubmit="return confirm('Apakah anda yakin?');"
                                    action="{{ route('member.destroy', $b->id) }}" method="POST">
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