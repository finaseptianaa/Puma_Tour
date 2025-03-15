@extends('halaman.layout')

@section('konten')
<div class="page-title">
    <h3>Rincian Pemesanan Paket Wisata</h3>
</div>
<section class="section">
    <div class="row">
        <!-- Paket yang Dipesan -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{asset('upload/gambar/'.$paket->foto)}}" class="img-fluid w-100 rounded-top" alt="Image">
                <div class="card-body">
                    <h5 class="card-title">{{$paket->judul}}</h5>
                    <p class="card-text mb-0"><strong>Destinasi:</strong> {{$paket->destinasi}}</p>
                    <p class="card-text mb-0"><strong>Fasilitas:</strong> {{$paket->fasilitas}}</p>
                    <p class="card-text"><strong>Bus:</strong> {{$paket->bus}}</p>

                    <a href="/pemesanan/invoice/{{$pemesanan->id}}" class="btn btn-warning w-100">
                        <i class="bi bi-printer"></i>
                        Cetak Invoice
                    </a>
                </div>
            </div>
        </div>

        <!-- Detail Pemesanan -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h5>Detail Pemesanan Paket</h5>
                    <form>
                        <div class="mb-3">
                            <label for="tanggal_berangkat" class="form-label">Tanggal Berangkat</label>
                            <input type="date" class="form-control" id="tanggal_berangkat" value="{{$pemesanan->tanggal_berangkat}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="nama_rombongan" class="form-label">Nama Rombongan</label>
                            <input type="text" class="form-control" id="nama_rombongan" value="{{$pemesanan->nama_rombongan}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="jumlah_pax" class="form-label">Jumlah Pax (Orang)</label>
                            <input type="text" class="form-control" id="jumlah_pax" value="{{$pemesanan->jumlah_pax}}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="no_hp" class="form-label">No HP (WhatsApp)</label>
                            <input type="text" class="form-control" id="no_hp" value="{{$pemesanan->no_hp}}" disabled>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Harga Paket -->
    <div class="mt-3">
        <div class="card">
            <div class="card-body">
                <h5>Rincian Harga</h5>
                <div class="row mb-2">
                    <div class="col-6"><strong>Harga Paket:</strong></div>
                    <div class="col-6">Rp{{number_format(($paket->harga * $pemesanan->jumlah_pax), 0, '.', '.')}}</div>
                </div>
                @if($paket->harga > $pemesanan->harga)
                    <div class="row mb-2 text-danger">
                        <div class="col-6"><strong>Harga Potongan:</strong></div>
                        <div class="col-6">Rp{{number_format(($pemesanan->harga * $pemesanan->jumlah_pax), 0, '.', '.')}}</div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Upload Bukti Pembayaran -->
    <div class="mt-3">
        <div class="card">
            <div class="card-body">
                <h5>Upload Bukti Pembayaran</h5>
                @if($pemesanan->transaksi)
                    <b>Status Pembayaran: {{$pemesanan->transaksi->status}}</b>
                @else
                    <b>Anda Belum melakukan Pembayaran DP</b>
                @endif
                <br>

                @if(Auth::user()->level == 'konsumen')
                    @if($pemesanan->transaksi)
                        @if($pemesanan->transaksi->status == 'DP Lunas')
                        <p>Silakan lakukan pembayaran pelunasan sebesar <b>Rp{{number_format((($pemesanan->harga * $pemesanan->jumlah_pax)-($pemesanan->harga * $pemesanan->jumlah_pax) * 30/100), 0, '.', '.')}}</b> ke nomor rekening berikut: 12345678 (BRI) / 23554545 (BCA).</p>
                        @endif
                        @if($pemesanan->transaksi->status == 'Belum Bayar' || $pemesanan->transaksi->status == 'DP Lunas' )
                            <form action="/pemesanan/pembayaran/{{$pemesanan->id}}" method="post" enctype="multipart/form-data">
                                <div class="input-group">
                                    @csrf
                                    <input type="file" name="bukti_pembayaran" class="form-control">
                                    <button class="btn btn-primary">Upload</button>
                                </div>
                            </form>
                        @else
                            @if($pemesanan->transaksi->bukti_pembayaran)
                            <img src="{{asset('upload/pemesanan/'.$pemesanan->transaksi->bukti_pembayaran)}}" class="w-50 rounded" alt="Image">
                            <p>Anda sudah melalukan upload bukti pembayaran Pelunasan. Silakan konfirmasi pembayaran dengan tombol berikut:</p>
                            <a href="https://wa.me/62895329933627?text=saya ingin melakukan konfirmasi pembayaran Pelunasan paket {{ $paket->judul }} dengan nama rombangan {{ $pemesanan->nama_rombongan}} akan berangkat pada tanggal {{$pemesanan->tanggal_berangkat}} dengan jumlah pax sebanyak {{$pemesanan->jumlah_pax}}" target="_blank" class="btn btn-success btn-sm">Hubungi WhatsApp</a>
                            @else
                            <img src="{{asset('upload/pemesanan/'.$pemesanan->transaksi->bukti_dp)}}" class="w-50 rounded" alt="Image">
                            <p>Anda sudah melalukan upload bukti pembayaran DP. Silakan konfirmasi pembayaran dengan tombol berikut:</p>
                            <a href="https://wa.me/62895329933627?text=saya ingin melakukan konfirmasi pembayaran DP paket {{ $paket->judul }} dengan nama rombangan {{ $pemesanan->nama_rombongan}} akan berangkat pada tanggal {{$pemesanan->tanggal_berangkat}} dengan jumlah pax sebanyak {{$pemesanan->jumlah_pax}}" target="_blank" class="btn btn-success btn-sm">Hubungi WhatsApp</a>
                            @endif
                        @endif
                    @else
                        <!-- Baru bayar DP -->
                        <p>Silakan lakukan pembayaran DP sebesar <b>Rp{{number_format((($pemesanan->harga * $pemesanan->jumlah_pax) * 30/100), 0, '.', '.')}}</b> ke nomor rekening berikut: 12345678 (BRI) / 23554545 (BCA).</p>
                        <form action="/pemesanan/pembayaran/{{$pemesanan->id}}" method="post" enctype="multipart/form-data">
                            <div class="input-group">
                                @csrf
                                <input type="file" name="bukti_dp" class="form-control">
                                <button class="btn btn-danger">Upload</button>
                            </div>
                        </form>
                    @endif
                @elseif(Auth::user()->level == 'bendahara')
                    @if($pemesanan->transaksi)
                        @if($pemesanan->transaksi->bukti_dp)
                            <h3>BUKTI DP</h3>
                            <img src="{{asset('upload/pemesanan/'.$pemesanan->transaksi->bukti_dp)}}" class="w-50 rounded" alt="Image">
                        @endif
                        
                        @if($pemesanan->transaksi->status == 'DP Sedang Diproses')
                            <form action="/manajemen/pemesanan/status/{{$pemesanan->id}}" method="post">
                                @csrf
                                <input type="hidden" name="jenis" value="dp">
                                <button name="terima" class="btn btn-success">Terima</button>
                                <button name="tolak" class="btn btn-danger">Tolak</button>
                            </form>
                        @endif

                        @if($pemesanan->transaksi->bukti_pembayaran)
                            <h3>BUKTI PELUNASAN</h3>
                            <img src="{{asset('upload/pemesanan/'.$pemesanan->transaksi->bukti_pembayaran)}}" class="w-50 rounded" alt="Image">
                        @endif
                        
                        @if($pemesanan->transaksi->status == 'Pelunasan Sedang Diproses')
                            <form action="/manajemen/pemesanan/status/{{$pemesanan->id}}" method="post">
                                @csrf
                                <input type="hidden" name="jenis" value="pelunasan">
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
