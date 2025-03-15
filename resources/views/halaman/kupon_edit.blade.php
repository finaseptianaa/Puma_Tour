@extends('halaman.layout')

@section('konten')
<div class="page-title">
    <a href="/kupon" class="">kembali</a>
    <h3>Edit kupon</h3>
    
    @if(session('sukses'))
    <div class="text-success mb-5">
        {{ session('sukses')}}
    </div>
    @endif
</div>
<section class="section">
    <form action="/kupon/update/{{$kupon->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <label>kode</label>
        <input type="text" name="kode" value="{{$kupon->kode}}" class="form-control mb-2">
        <label>potongan</label>
        <input type="text" name="potongan" value="{{$kupon->potongan}}" class="form-control mb-2">
        <button class="btn btn-primary">edit</button>
        
    </form>
</section>
@endsection