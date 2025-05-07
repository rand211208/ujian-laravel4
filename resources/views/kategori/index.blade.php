@extends ('layout')

@section('konten')

<div class="d-flex">

<h4> Daftar Kategori </h4>

<div class="ms-auto">

<a class="btn btn-success" href="{{ route ('kategori.create') }}">Tambah Kategori</a>

</div>

</div>

<table class="table mt-3">

<thead>

<tr>

<th scope="col">No</th>

<th scope="col">Nama Kategori</th>

<th scope="col">Aksi</th>

</tr>

</thead>

<tbody>

@foreach ($kategori as $no=>$kategori)

<tr>

<td>{{ $no + 1}}</td>

<td>{{ $kategori->nama_kategori }}</td>

<td>

<form action="{{ route('kategori.destroy', $kategori->id) }}" method="post">

<a href="{{ route('kategori.edit', $kategori->id) }}" class="btn btn-warning">Edit</a>

@csrf

@method('DELETE')

<button class="btn btn-danger"> Hapus </button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

@endsection
