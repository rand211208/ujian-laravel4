@extends('layout')

@section('konten')
    <h4 class="mt-3">Tambah Produk</h4>

    <form action="{{ route('produk.store') }}" method="post" class="row g-3 mt-3" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama Produk</label>
            <input type="text" name="nama_produk" value="" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" rows="3"></textarea>
        </div>
        <div class="mb-6">
            <label class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control">
        </div>
        <div class="mb-6">
            <label class="form-label">Stok</label>
            <input type="number" name="stok" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Gambar</label>
            <input type="file" name="nama_file" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <select name="kategori_id" id="kategori_id" required>
                <option value="">Pilih Kategori</option>
                @foreach ($kategori as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="ms-auto">
        <button type="submit" class="btn btn-primary">Tambah</button> 
    </div>
        <div class="ms-auto">
        <a class="btn btn-success" href="/produk">Kembali</a>
    </div>
    </form>
@endsection
