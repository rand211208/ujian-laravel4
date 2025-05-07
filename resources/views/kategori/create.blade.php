@extends('layout')

@section('konten')

<h4 class="mt-3"> Tambah Produk </h4>

<form action="{{ route('kategori.store') }}" method="post" class="row g-3 mt-3">

@csrf

<div class="mb-3">

<label class="form-label">Nama Kategori</label>

<input type="text" name="nama_kategori" value="" class="form-control">

</div>

<button type="submit" class="btn btn-primary mt-3">Tambah</button>

</form>

@endsection 