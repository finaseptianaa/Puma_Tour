<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kupon;
use Illuminate\Http\Request;

class KuponController extends Controller
{
    function tampil(){
        $kupon =  Kupon::orderBy('id', 'desc')->get();
        return view('halaman.kupon', compact('kupon'));
    }

    function tambah(){
        return view('halaman.kupon_tambah');
    }

    function hapus($id) {
        $kupon = Kupon::find($id);
        $kupon->delete();
        return redirect()->back()->with('success','berhasil menghapus paket');
        
    }

    function edit($id){
        $kupon = Kupon::find($id);
        return view('halaman.kupon_edit', compact('kupon'));
        
    }

    function submit(Request $request){
        $kode= $request->kode;
        $potongan= $request->potongan;
        
        $kupon= new Kupon();
        $kupon->user_id = auth()->id();
        $kupon->kode= $kode;
        $kupon->potongan= $potongan;
        $kupon->save();

        return redirect()->back()->with('sukses','kupon berhasil ditambahkan');
    }

    function update(Request $request, $id){
        $kode= $request->kode;
        $potongan= $request->potongan;

        $kupon = Kupon::find($id);
        
        $kupon->kode= $kode;
        $kupon->potongan= $potongan;
        $kupon->update();

        return redirect()->back()->with('sukses','kupon berhasil ditambahkan');
    }
}
