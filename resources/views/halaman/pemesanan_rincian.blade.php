@extends('halaman.layout')

@section('konten')
<div class="page-title">
    <h3>Rincian Pemesanan Paket Wisata</h3>
</div>
<section class="section">
    <div class="row">
        <div class="col-md-4">
            <h5>Paket Yang Dipesan</h5>
            <img src="{{asset('upload/gambar/'.$paket->foto)}}" class="img-fluid w-100 rounded" alt="Image">
            <h5 class="mt-2">{{$paket->judul}}</h5>
            <p>
                DESTINASI   : {{$paket->destinasi}} <br>
                FASILITAS   : {{$paket->fasilitas}} <br>
                BUS         : {{$paket->bus}} <br>
                TOTAL_HARGA       : Rp{{number_format(($pemesanan->harga * $pemesanan->jumlah_pax), 0, '.', '.')}} <br>
            </p>
        </div>
        <div class="col-md-8">
            <h5>Detail Pemesanan Paket</h5>
            <label>Tanggal Berangkat</label>
            <input type="date" name="tanggal_berangkat" value="{{$pemesanan->tanggal_berangkat}}" disabled class="form-control">
            <label>Nama Rombongan</label>
            <input type="text" name="nama_rombongan" value="{{$pemesanan->nama_rombongan}}" disabled class="form-control">
            <label>Jumlah Pax (Orang)</label>
            <input type="text" name="jumlah_pax" value="{{$pemesanan->jumlah_pax}}" disabled class="form-control">
            <label>No hp(whasapp)</label>
            <input type="text" name="no_hp" value="{{$pemesanan->no_hp}}" disabled class="form-control">
        </div>
    </div>

    <div class="mt-3">
        <div class="card">
            <div class="card-body">
                <h5>Upload Bukti Pembayaran</h5>
                @if($pemesanan->transaksi)
                <b>Status Pembayaran: {{$pemesanan->transaksi->status}}</b>
                @else
                <b>Anda Belum melakukan transaksi</b>
                @endif
                <br>
                

                @if(Auth::user()->level=='konsumen')
                    @if($pemesanan->transaksi)
                        @if($pemesanan->transaksi->status =='Belum Bayar')
                        <form action="/pemesanan/pembayaran/{{$pemesanan->id}}" method="post" enctype="multipart/form-data">
                            <div class="input-group">
                                @csrf
                                <input type="file" name="bukti_pembayaran" class="form-control">
                                <button class="btn btn-danger">Upload</button>
                            </div>
                        </form>
                        @else
                        <img src="{{asset('upload/pemesanan/'.$pemesanan->transaksi->bukti_pembayaran)}}" class="w-50   rounded" alt="Image">
                        <p>
                            Anda sudah melalukan upload bukti pembayaran silahkan konformasi pembayaran dengan tombol berikut: 
                            <a href="https://wa.me/62895329933627?text=saya ingin melakukan konfirmasi pembayaran paket {{ $paket->judul }} dengan nama rombangan {{ $pemesanan->nama_rombongan}} akan berangkat pada tanggal {{$pemesanan->tanggal_berangkat}} dengan jumlah pax sebanyak {{$pemesanan->jumlah_pax}}" target="_blank" class="btn btn-sm btn-success">Hub Whastapp</a>
                        </p>
                        @endif
                    @else
                    <p>
                        Silahkan Lakukan Pembayaran Sebesar <b>Rp{{number_format(($pemesanan->harga * $pemesanan->jumlah_pax), 0, '.', '.')}}</b>
                        Ke Nomor Rekening Berikut : 12345678 (BRI) / 23554545(BCA). <br>
                        Kemudian Upload Bukti Pembayaran Dibawah
                    </p>
                    <form action="/pemesanan/pembayaran/{{$pemesanan->id}}" method="post" enctype="multipart/form-data">
                        <div class="input-group">
                            @csrf
                            <input type="file" name="bukti_pembayaran" class="form-control">
                            <button class="btn btn-danger">Upload</button>
                        </div>
                    </form>
                    @endif
                @elseif(Auth::user()->level=='bendahara')
                    @if($pemesanan->transaksi)
                        @if($pemesanan->transaksi->status !='Belum Bayar')
                        <img src="{{asset('upload/pemesanan/'.$pemesanan->transaksi->bukti_pembayaran)}}" class="w-50   rounded" alt="Image">
                        <form action="/manajemen/pemesanan/status/{{$pemesanan->id}}" method="post">
                            @csrf
                            <button name="terima" class="btn btn-success">Terima</button>
                            <button name="tolak" class="btn btn-danger">Tolak</button>
                        </form>
                        @endif
                    @endif
                @endif
            </div>
        </div>
    </div>
</section>
@endsection