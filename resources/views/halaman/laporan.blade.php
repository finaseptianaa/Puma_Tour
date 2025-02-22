@extends('halaman.layout')

@section('konten')
<div class="page-title">
    <h3>Laporan Pemesanan Paket Wisata</h3>
</div>
<section class="section">

    <form action="/laporan">
        <div class="d-flex align-items-end">
            <div class="mr-2">
                <label >Tanggal Mulai</label>
                <input type="date" name="mulai" value="{{request('mulai') ? request('mulai') : $mulai}}" class="form-control">
            </div>
            <div class="mr-2">
                <label >Tanggal akhir</label>
                <input type="date" name="akhir" value="{{request('akhir') ? request('akhir') : $akhir}}" class="form-control">
            </div>
            <div class="mr-2">
                <button class="btn btn-primary">filter</button>
                <button class="btn btn-warning" name="cetak">
                    <i class="bi bi-printer"></i>
                    Cetak
                </button>
            </div>
        </div>
    </form>

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
                    <th>Harga</th>
                    <th>No Hp</th>
                    <th>Status</th>
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
                    <td>{{$data->harga}}</td>
                    <td>{{$data->no_hp}}</td>
                    <td>{{$data->status}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection