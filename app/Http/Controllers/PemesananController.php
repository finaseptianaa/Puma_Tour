<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kupon;
use App\Models\Paket;
use App\Models\Pemesanan;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemesananController extends Controller
{
    function tampil(){
        $pemesanan = Auth::user()->pemesanan()->orderBy('id', 'desc')->get();
        return view('halaman.pemesanan', compact('pemesanan'));
    }

    function manajemenPemesanan(){
        $pemesanan = Pemesanan::orderBy('id', 'desc')->get();
        return view('halaman.manajemen_pemesanan', compact('pemesanan'));
    }

    function manajemenPemesananStatus(Request $request, $id){
        $pemesanan = Pemesanan::find($id);
        $transaksi = $pemesanan->transaksi;

        if ($transaksi) {
            if ($request->has('terima')) {
                if ($request->jenis == 'dp') {
                    $transaksi->status = 'DP Lunas';
                }
                if ($request->jenis == 'pelunasan') {
                    $transaksi->status = 'Lunas';
                }
            }else{
                $transaksi->status = 'Belum Bayar';
                unlink(public_path("upload/pemesanan/".$transaksi->bukti_dp));
                unlink(public_path("upload/pemesanan/".$transaksi->bukti_pembayaran));
            }
            $transaksi->update();
        }

        return redirect()->back();
    }

    function rincian($id){
        $pemesanan = Pemesanan::find($id);
        $paket = $pemesanan->paket;
        return view('halaman.pemesanan_rincian', compact('pemesanan', 'paket'));
    }

    function pemesananPaket(Request $request , $id){
        $paket = Paket::find($id);

        $kupon_kode = $request->kode;
        $kupon = Kupon::where('kode' , $kupon_kode)->first();

        return view('pemesanan_paket', compact('paket' , 'kupon'));
    }

    function pembayaran(Request $request, $id){
        $pemesanan = Pemesanan::find($id);

        if ($request->file('bukti_dp')) {
            $bukti_pembayaran= $request->file('bukti_dp');

            if ($bukti_pembayaran) {
                $nama_bukti_pembayaran= time().'_bukti_dp_.'.$bukti_pembayaran->getClientOriginalExtension();
                $folder= public_path("upload/pemesanan/");
                $bukti_pembayaran->move($folder, $nama_bukti_pembayaran);
            }

            $transaksi = $pemesanan->transaksi;

            if ($transaksi) {
                $transaksi->bukti_dp = $nama_bukti_pembayaran;
                $transaksi->status = "DP Sedang Diproses";
                $transaksi->update();
            } else {
                $transaksi = new Transaksi();
                $transaksi->user_id = auth()->user()->id;
                $transaksi->pemesanan_id = $pemesanan->id;
                $transaksi->no_invoice = 'INV/'.date('dmY').'/'.$pemesanan->id;
                $transaksi->bukti_dp = $nama_bukti_pembayaran;
                $transaksi->status = "DP Sedang Diproses";
                $transaksi->save();
            }
        } else {
            $bukti_pembayaran= $request->file('bukti_pembayaran');

            if ($bukti_pembayaran) {
                $nama_bukti_pembayaran= time().'_bukti_pembayaran_.'.$bukti_pembayaran->getClientOriginalExtension();
                $folder= public_path("upload/pemesanan/");
                $bukti_pembayaran->move($folder, $nama_bukti_pembayaran);
            }

            $transaksi = $pemesanan->transaksi;

            if ($transaksi) {
                $transaksi->bukti_pembayaran = $nama_bukti_pembayaran;
                $transaksi->status = "Pelunasan Sedang Diproses";
                $transaksi->update();
            }
        }

        return redirect()->back();
    }

    function pemesananpaketsubmit(Request $request, $id){
        $paket = Paket::find($id);
        $user = Auth::user();

        //proses untuk cek potongan harga dari kupon
        $harga = $paket->harga;
        $kupon_kode = $request->kode;
        $kupon = Kupon::where('kode' , $kupon_kode)->first();
        if ($kupon) {
            $harga = $paket->harga - $kupon->potongan;
        }
        
        $pemesanan = new Pemesanan();
        $pemesanan->paket_id = $paket->id;
        $pemesanan->user_id = $user->id;
        $pemesanan->tanggal_berangkat = $request->tanggal_berangkat;
        $pemesanan->harga = $harga;
        $pemesanan->nama_rombongan = $request->nama_rombongan;
        $pemesanan->jumlah_pax = $request->jumlah_pax;
        $pemesanan->no_hp = $request->no_hp;
        $pemesanan->save();

        //menghapus kupon setelah digunakan 
        if ($kupon) {
            $kupon->delete();
        }

        return redirect('/pemesanan/rincian/'.$pemesanan->id);
    }

    function pemesananInvoice($id){
        $pemesanan = Pemesanan::find($id);
        $paket = $pemesanan->paket;
        return view('halaman.pemesanan_invoice', compact('pemesanan', 'paket'));
    }

}
