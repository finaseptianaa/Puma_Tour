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
            @if(Auth::user()->level != 'direktur')
            <div class="mr-2">
                <button class="btn btn-primary">filter</button>
                <button class="btn btn-warning" name="cetak">
                    <i class="bi bi-printer"></i>
                    Cetak
                </button>
            </div>
            @endif
        </div>
    </form>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>no</th>
                    <th>no invoice</th>
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
                    @if($data->transaksi)
                    <td>{{$data->transaksi->no_invoice}}</td>
                    @else
                    <td>-</td>
                    @endif
                    <td>{{$data->user->nama}}</td>
                    <td>{{$data->paket->judul}}</td>
                    <td>{{$data->tanggal_berangkat}}</td>
                    <td>{{$data->nama_rombongan}}</td>
                    <td>{{$data->jumlah_pax}}</td>
                    <td>{{$data->harga}}</td>
                    <td>{{$data->no_hp}}</td>
                    @if($data->transaksi)
                    <td>{{$data->transaksi->status}}</td>
                    @else
                    <td>Belum ada transaksi</td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection