@extends('layout')


@section('konten')
    <div class="container-fluid px-4">
        <h4 class="mt-4">Detail Produk</h4>
        <div class="mb-4"></div>

        <div class="card shadow bg-white">
            <div class="card-header">
                <strong>Informasi Produk</strong>
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h5>Kategori:</h5>
                        <p>{{ $kategori->firstWhere('id', $produk->kategori_id)?->nama_kategori ?? '-' }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Nama Produk:</h5>
                        <p>{{ $produk->nama_produk }}</p>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6">
                        <h5>Harga:</h5>
                        <p>Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Stok:</h5>
                        <p>{{ $produk->stok }}</p>
                    </div>
                </div>

                <div class="mb-4">
                    <h5>Gambar Produk:</h5>
                    <div style="background-color: #f8f9fa; padding: 10px; border-radius: 8px;">
                        <img src="{{ asset('uploads/' . $produk->nama_file) }}" alt="Gambar Produk"
                            style="width: 300px; height: auto;">
                    </div>
                </div>

                <div class="mb-4">
                    <h5>Deskripsi:</h5>
                    <p style="white-space: pre-wrap;">{{ $produk->deskripsi }}</p>
                </div>
            </div>

            <div class="card-footer text-end">
                <a href="{{ url('/produk') }}" class="btn btn-success btn-sm">&laquo; Kembali</a>
            </div>
        </div>
    </div>
@endsection
