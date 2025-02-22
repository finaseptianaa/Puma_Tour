@extends('halaman.layout')

@section('konten')
<div class="page-title">
    <h3>Dashboard</h3>
    <p class="text-subtitle text-muted">
        hallo, {{ Auth::user()->nama }}. Anda login sebagai {{ Auth::user()->level }}
    </p>
</div>
<section class="section">
</section>
@endsection