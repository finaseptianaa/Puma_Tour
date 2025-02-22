@extends('halaman.layout')

@section('konten')
<div class="page-title">
    <a href="/paket" class="">kembali</a>
    <h3>Edit Paket Wisata</h3>
    
    @if(session('sukses'))
    <div class="text-success mb-5">
        {{ session('sukses')}}
    </div>
    @endif
</div>
<section class="section">
    <form action="/paket/update/{{$paket->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <label>Judul</label>
        <input type="text" name="judul" value="{{$paket->judul}}" class="form-control mb-2">
        <label>Destinasi</label>
        <input type="text" name="destinasi" value="{{$paket->destinasi}}" class="form-control mb-2">
        <label>Fasilitas</label>
        <input type="text" name="fasilitas" value="{{$paket->fasilitas}}" class="form-control mb-2">
        <label>Bus</label>
        <input type="text" name="bus" value="{{$paket->bus}}" class="form-control mb-2">
        <label>Harga</label>
        <input type="number" name="harga" value="{{$paket->harga}}" class="form-control mb-2">
        <label>Foto</label> <br>
        <img src="{{asset('upload/gambar/'.$paket->foto)}}" width="100px" alt="">
        <input type="file" name="foto" class="form-control mb-2">
        <label>Deskripsi</label>
        <input type="text" name="deskripsi" value="{{$paket->deskripsi}}" class="form-control mb-2">
        <button class="btn btn-primary">Edit</button>
        
    </form>
</section>
@endsection