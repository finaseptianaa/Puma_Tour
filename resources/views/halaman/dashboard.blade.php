@extends('halaman.layout')

@section('konten')
<div class="page-title d-flex justify-content-between align-items-center">
    <div>
        <h3>Dashboard</h3>
        <p class="text-subtitle text-muted">
            Hallo, {{ Auth::user()->nama }}. Anda login sebagai {{ Auth::user()->level }}
        </p>
    </div>
</div>

<section class="section">
    <div class="row my-4">
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h4>Total Pemesanan</h4>
                    <p class="display-5">{{ App\Models\Pemesanan::count() }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h4>Total Transaksi</h4>
                    <p class="display-5">{{ App\Models\Transaksi::count() }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h4>Jumlah Pengguna</h4>
                    <p class="display-5">{{ App\Models\User::count() }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
