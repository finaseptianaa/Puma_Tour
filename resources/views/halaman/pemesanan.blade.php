@extends('halaman.layout')

@section('konten')
<div class="page-title">
    <h3>Pemesanan Paket Wisata</h3>
</div>
<section class="section">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>no</th>
                    <th>Nama</th>
                    <th>Paket</th>
                    <th>Tanggal Berangkat</th>
                    <th>Nama Rombongan</th>
                    <th>Jumlah Pax</th>
                    <th>No Hp</th>
                    <th>Status</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pemesanan as $no=>$data)
                <tr>
                    <td>{{$no+1}}</td>
                    <td>{{$data->user->nama}}</td>
                    <td>{{$data->paket->judul}}</td>
                    <td>{{$data->tanggal_berangkat}}</td>
                    <td>{{$data->nama_rombongan}}</td>
                    <td>{{$data->jumlah_pax}}</td>
                    <td>{{$data->no_hp}}</td>
                    @if($data->transaksi)
                    <td>{{$data->transaksi->status}}</td>
                    @else
                    <td>Belum ada transaksi</td>
                    @endif
                    <td>
                        <a href="/pemesanan/rincian/{{$data->id}}" class="btn btn-sm btn-danger">Detail</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection