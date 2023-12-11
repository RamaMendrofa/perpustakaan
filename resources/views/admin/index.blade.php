@extends('master2')
@section('isi')
<div class="container">
<div class="row">
<div class="col-md-12">
<h2 class="mt-3">Daftar Admin</h2>
<p><a class="btn btn-primary mt-3" href="{{ route('admin.create') }}">Tambah Admin</a></p>
@if(session()->get('success'))
<div class="alert alert-success">
{{ session()->get('success') }}
</div>
@endif
<table class="table table-striped" style="text-align:center">
<thead>
<tr>
<th>ID</th>
<th>Nama</th>
<th>Email</th>
<th>Telepon</th>
<th>Password</th>
<th>username</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>

<tbody>
@foreach($admin as $n)
<tr>
<td>{{ $n->id }}</td>
<td>{{ $n->nama }}</td>
<td>{{ $n->email }}</td>
<td>{{ $n->telepon }}</td>
<td>{{ $n->password }}</td>
<td>{{ $n->username }}</td>
<td><a class="btn btn-warning" href="{{ route('admin.edit', $n->id) }}">Edit</a> </td>
<td>
<form onsubmit="return confirm('Apakah anda yakin?');" action="{{ route('admin.destroy', $n->id) }}" method="POST">
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



@endsection

