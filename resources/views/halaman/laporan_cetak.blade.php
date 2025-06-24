<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pemesanan Paket Wisata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .page-title {
            text-align: center;
            margin-bottom: 20px;
        }
        .page-title h3 {
            margin: 0;
            color: #333;
        }
        .page-title p {
            color: #777;
        }
        .table-container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        @media print {
            @page {
                size: landscape;
            }
            body {
                background: none;
                margin: 0;
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
    <a href="/laporan" class="no-print">Kembali</a>
    <button onclick="window.print()" class="no-print">Cetak Kembali</button>
    <div class="page-title">
        <h3>Laporan Pemesanan Paket Wisata</h3>
        <p>Tanggal {{ $mulai }} s.d {{ $akhir }}</p>
    </div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>No Invoice</th>
                    <th>Nama</th>
                    <th>Paket</th>
                    <th>Tanggal Berangkat</th>
                    <th>Nama Rombongan</th>
                    <th>Jumlah Pax</th>
                    <th>Harga</th>
                    <th>No HP</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pemesanan as $no=>$data)
                <tr>
                    <td>{{$no+1}}</td>
                    <td>{{ $data->transaksi ? $data->transaksi->no_invoice : '-' }}</td>
                    <td>{{$data->user->nama}}</td>
                    <td>{{$data->paket->judul}}</td>
                    <td>{{$data->tanggal_berangkat}}</td>
                    <td>{{$data->nama_rombongan}}</td>
                    <td>{{$data->jumlah_pax}}</td>
                    <td>{{$data->harga}}</td>
                    <td>{{$data->no_hp}}</td>
                    <td>{{ $data->transaksi ? $data->transaksi->status : 'Belum ada transaksi' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <table style="float: right; margin-top: 20px;">
        <tr>
            <td>Metro, {{ date('d/m/Y') }}</td>
        </tr>
        <tr style="height: 50px;">
            <td></td>
        </tr>
        <tr>
            <td>Bendahara</td>
        </tr>
    </table>
</body>
</html>
