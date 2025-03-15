@extends('halaman.layout')

@section('konten')
<div class="page-title">
    <h3>Kupon</h3>
    <div>
        <a href="/kupon/tambah" class="btn btn-primary">tambah kupon</a>
    </div>
</div>
<section class="section">
    <table class="table">
        <thead>
            <tr>
                <th>no</th>
                <th>kode</th>
                <th>potongan</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kupon as $no=>$data)
            <tr>
                <td>{{$no+1}}</td>
                <td>{{$data->kode}}</td>
                <td>{{$data->potongan}}</td>
                <td>
                    <a href="/kupon/edit/{{$data->id}}" class="btn btn-sm btn-warning">edit</a>
                    <form action="/kupon/hapus/{{$data->id}}" method="post">
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