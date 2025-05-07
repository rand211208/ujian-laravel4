@extends('layout')

@section('konten')

<div class="d-flex">
    <h4>Daftar Produk </h4>
    <div class="ms-auto">
        <a class="btn btn-success"href="{{route('produk.create')}}">Tambah Produk</a>
   </div>
</div>

<table class="table mt-3">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Harga</th>
            <th scope="col">Stok</th>
            <th scope="col">Gambar</th>
            <th scope="col">Kategori</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    
    <tbody> 
       @foreach($produk as $no =>$produk)
           <tr>
               <td>{{$no +1 }}</td>
               <td>{{$produk->nama_produk }}</td>
               <td>{{$produk->deskripsi }}</td>
               <td>{{$produk->harga }}</td>
               <td>{{$produk->stok }}</td>
               <td>
               <div
                    style="width: 100px; height: 75px; overflow: hidden; display: flex; align-items: center; justify-content: center; margin: auto;">
                    <img src="{{ asset('uploads/' . $produk->nama_file) }}" alt="gambar produk"
                    style="max-height: 100%; max-width: 100%; object-fit: contain;">
                </div>
            </td>
               <td>{{$produk->kategori->nama_kategori }}</td>
               
               <td>
                  <form action="{{route('produk.destroy',$produk->id)}}"method="post">
                  <a href="{{ route('produk.show', $produk->id) }}"
                                                class="btn btn-info btn-sm btn-aksi">
                                                <i class="bi bi-eye"></i> Detail
                                            </a>
        
                      <a href="{{route('produk.edit',$produk->id)}}"class="btn btn-warning">Edit</a>
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger">Hapus </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection