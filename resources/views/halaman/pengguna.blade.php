@extends('halaman.layout')

@section('konten')
<div class="page-title">
    <h3>Pengguna</h3>
    <div>
        <a href="/pengguna/tambah" class="btn btn-primary">tambah pengguna</a>
    </div>
</div>
<section class="section">
    <table class="table">
        <thead>
            <tr>
                <th>no</th>
                <th>nama</th>
                <th>email</th>
                <th>level</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengguna as $no=>$data)
            <tr>
                <td>{{$no+1}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->level}}</td>
                <td>
                    <a href="/pengguna/edit/{{$data->id}}" class="btn btn-sm btn-warning">edit</a>
                    <form action="/pengguna/hapus/{{$data->id}}" method="post">
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