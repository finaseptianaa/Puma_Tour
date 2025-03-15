@extends('halaman.layout')

@section('konten')
<div class="page-title">
    <a href="/kupon" class="">kembali</a>
    <h3>Tambah kupon</h3>
    
    @if(session('sukses'))
    <div class="text-success mb-5">
        {{ session('sukses')}}
    </div>
    @endif
</div>
<section class="section">
    <form action="/kupon/submit" method="post" enctype="multipart/form-data">
        @csrf
        <label>kode</label>
        <input type="text" name="kode" class="form-control mb-2">
        <label>potongan</label>
        <input type="text" name="potongan" class="form-control mb-2">
        <button class="btn btn-primary">tambah</button>
        
    </form>
</section>
@endsection