@extends('halaman.layout')

@section('konten')
<div class="page-title">
    <a href="/pengguna" class="">kembali</a>
    <h3>Tambah pengguna</h3>
    
    @if(session('sukses'))
    <div class="text-success mb-5">
        {{ session('sukses')}}
    </div>
    @endif
</div>
<section class="section">
    <form action="/pengguna/submit" method="post" enctype="multipart/form-data">
        @csrf
        <label>nama</label>
        <input type="text" name="nama" class="form-control mb-2">
        <label>email</label>
        <input type="text" name="email" class="form-control mb-2">
        <label>level</label>
        <select name="level" class="form-control mb-2">
            <option value="admin">admin</option>
            <option value="bendahara">bendahara</option>
            <option value="direktur">direktur</option>
            <option value="konsumen">konsumen</option>
        </select>
        <label>password</label>
        <input type="password" name="password" class="form-control mb-2">
        <button class="btn btn-primary">tambah</button>
        
    </form>
</section>
@endsection