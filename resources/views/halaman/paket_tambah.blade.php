@extends('halaman.layout')

@section('konten')
<div class="page-title">
    <a href="/paket" class="">kembali</a>
    <h3>Tambah Paket Wisata</h3>
    
    @if(session('sukses'))
    <div class="text-success mb-5">
        {{ session('sukses')}}
    </div>
    @endif
</div>
<section class="section">
    <form action="/paket/submit" method="post" enctype="multipart/form-data">
        @csrf
        <label>Judul</label>
        <input type="text" name="judul" class="form-control mb-2">
        <label>Destinasi</label>
        <input type="text" name="destinasi" class="form-control mb-2">
        <label>Fasilitas</label>
        <input type="text" name="fasilitas" class="form-control mb-2">
        <label>Bus</label>
        <input type="text" name="bus" class="form-control mb-2">
        <label>Harga</label>
        <input type="number" name="harga" class="form-control mb-2">
        <label>Foto</label>
        <input type="file" name="foto" class="form-control mb-2">
        <label>Deskripsi</label>
        <input type="text" name="deskripsi" class="form-control mb-2">
        <button class="btn btn-primary">tambah</button>
        
    </form>
</section>
@endsection