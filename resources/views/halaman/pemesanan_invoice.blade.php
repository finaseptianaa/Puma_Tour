<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>invoince Pemesanan Paket Wisata</title>
    <style>
        body {
            max-width: 500px;
            margin: 0 auto;
        }
        .text-center {
            text-align: center;
        }
        .table {
            border: 1;
            border-collapse: collapse;
            width: 100%;
        }
        
        @media print {
            @page {
                size: portrait;
            }
            body {
                background: none;
                padding: 0;
            }
            .no-print {
                display: none;
            }
            th, td {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
        }
    </style>
</head>
<body onload="window.print()">
    <a href="/pemesanan/rincian/{{$pemesanan->id}}" class="no-print">Kembali</a>
    <button onclick="window.print()" class="no-print">Cetak Kembali</button>
    
    <br>
    <table>
        <tr>
            <td><img src="/admin/images/logo.jpg" alt="" style="width: 150px; height: auto;"></td>
            <td>Biro Perjalanan Wisata dan Ticketing Pesawat</td>
        </tr>
    </table>

    <h2 class="text-center">
        INVOICE
    </h2>

    <p style="text-align: right;">
        @if($pemesanan->transaksi)
            {{$pemesanan->transaksi->no_invoice}}
        @else
            Anda belum melakukan pembayaran
        @endif
    </p>

    <table class="table" border="1">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{ $pemesanan->nama_rombongan }}</td>
        </tr>
        <tr>
            <td>Jumlah Orang</td>
            <td>:</td>
            <td>{{ $pemesanan->jumlah_pax }}</td>
        </tr>
        <tr>
            <td>Rute</td>
            <td>:</td>
            <td>{{ $paket->destinasi }}</td>
        </tr>
        <tr>
            <td>Waktu Keberangkatan</td>
            <td>:</td>
            <td>{{ $pemesanan->tanggal_berangkat }}</td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td>
                @if($pemesanan->transaksi)
                    <span>{{ucwords($pemesanan->transaksi->status)}}</span>
                @else
                    <b>ANDA BELUM MELAKUKAN TRANSAKSI</b>
                @endif
            </td>
        </tr>
        <tr>
            <td>Tanggal Booking</td>
            <td>:</td>
            <td>{{ $pemesanan->created_at }}</td>
        </tr>
        <tr>
            <td>Total</td>
            <td>:</td>
            <td>Rp{{number_format(($pemesanan->harga * $pemesanan->jumlah_pax), 0, '.', '.')}}</td>
        </tr>
    </table>

    <table style="float: right; margin-top: 20px;">
        <tr>
            <td>Metro, {{ date('d/m/Y') }}</td>
        </tr>
        <tr style="height: 50px;">
            <td></td>
        </tr>
        <tr>
            <td>Puma Jaya Star</td>
        </tr>
    </table>

</body>
</html>
