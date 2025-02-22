<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    function tampil(Request $request) {
        $mulai = $request->mulai ? $request->mulai : date('Y-m-d');
        $akhir = $request->akhir ? $request->akhir : date('Y-m-d');

        //mencari pemesanan berdasarkan tanggal 
        $pemesanan = Pemesanan::whereDate('created_at' , '>=' , $mulai) 
                                ->whereDate('created_at' , '<=' , $akhir)
                                ->orderBy('id' , 'desc')
                                ->get(); 

        if ($request->has('cetak')) {
            return view('halaman.laporan_cetak', compact('pemesanan', 'mulai' , 'akhir'));
        }
        return view('halaman.laporan', compact('pemesanan', 'mulai' , 'akhir'));
    }
}
