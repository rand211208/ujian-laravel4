@extends('layout')

@section('konten')
    <h4 class="mt-3">Edit Produk</h4>

    <form action="{{ route('produk.update', $produk->id) }}" method="post" class="row g-3 mt-3" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nama Produk</label>
            <input type="text" name="nama_produk" value="{{ $produk->nama_produk }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <input type="text" name="deskripsi" value="{{ $produk->deskripsi }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number" name="harga" value="{{ $produk->harga }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Stok</label>
            <input type="number" name="stok" value="{{ $produk->stok }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Gambar saat ini</label>
            <img src="{{ asset('uploads/' . $produk->nama_file)}}" alt="Gambar Produk" style="max-height: 200px;">
        </div>
        <div class="mb-3">
            <label class="form-label">Gambar</label>
            <input type="file" name="nama_file" class="form-control">
            <input type="hidden" name="old_file" value="{{ $produk->nama_file }}">
        </div>
        <div class="mb-3">
        <select name="kategori_id" id="kategori_id" required>
            <option value="">Pilih Kategori</option>
            @foreach ($kategori as $kategori)
                <option value="{{ $kategori->id }}"
                    {{ $produk->kategori_id == $kategori->id ? 'selected' : '' }}>
                    {{ $kategori->nama_kategori }}
                </option>
            @endforeach
        </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Edit</button>
    </form>
@endsection
