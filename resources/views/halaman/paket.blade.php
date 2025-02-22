@extends('halaman.layout')

@section('konten')
<div class="page-title">
    <h3>Paket Wisata</h3>
    <div>
        <a href="/paket/tambah" class="btn btn-primary">tambah paket</a>
    </div>
</div>
<section class="section">
    <table class="table">
        <thead>
            <tr>
                <th>no</th>
                <th>Judul</th>
                <th>destinasi</th>
                <th>fasilitass</th>
                <th>bus</th>
                <th>harga</th>
                <th>foto</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($paket as $no=>$data)
            <tr>
                <td>{{$no+1}}</td>
                <td>{{$data->judul}}</td>
                <td>{{$data->destinasi}}</td>
                <td>{{$data->fasilitas}}</td>
                <td>{{$data->bus}}</td>
                <td>{{$data->harga}}</td>
                <td>
                    <img src="{{asset('upload/gambar/'.$data->foto)}}" width="100px" alt="">
                </td>
                <td>
                    <a href="/paket/edit/{{$data->id}}" class="btn btn-sm btn-warning">edit</a>
                    <form action="/paket/hapus/{{$data->id}}" method="post">
                        @csrf
                        <button class="btn btn-sm btn-danger mt-1">hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection