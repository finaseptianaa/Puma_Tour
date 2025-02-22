<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    function tampil(){
        $paket= Paket::orderBy('id','DESC')->get();
        return view('halaman.paket', compact('paket'));
    }

    function tambah(){
        return view('halaman.paket_tambah');
    }

    function hapus($id) {
        $paket = Paket::find($id);
        $paket->delete();
        return redirect()->back()->with('success','berhasil menghapus paket');
    }

    function edit($id) {
        $paket = Paket::find($id);
        return view('halaman.paket_edit', compact('paket'));
        
    }

    function submit(Request $request){
        $judul= $request->judul;
        $destinasi= $request->destinasi;
        $fasilitas= $request->fasilitas;
        $bus= $request->bus;
        $harga= $request->harga;
        $foto= $request->file('foto');
        $deskripsi= $request->deskripsi;

        if ($foto) {
            $nama_foto= time().'_paket.'.$foto->getClientOriginalExtension();
            $folder= public_path("upload/gambar/");
            $foto->move($folder, $nama_foto);
        }
        
        $paket= new Paket();
        $paket->judul= $judul;
        $paket->destinasi= $destinasi;
        $paket->fasilitas= $fasilitas;
        $paket->bus= $bus;
        $paket->harga= $harga;
        $paket->foto= $nama_foto;
        $paket->deskripsi= $deskripsi;
        $paket->save();

        return redirect()->back()->with('sukses','paket berhasil ditambahkan');
    }

    function update(Request $request, $id){
        $judul= $request->judul;
        $destinasi= $request->destinasi;
        $fasilitas= $request->fasilitas;
        $bus= $request->bus;
        $harga= $request->harga;
        $foto= $request->file('foto');
        $deskripsi= $request->deskripsi;

        $paket = Paket::find($id);
        if ($foto) {
            $nama_foto= time().'_paket.'.$foto->getClientOriginalExtension();
            $folder= public_path("upload/gambar/");
            $foto->move($folder, $nama_foto);

            unlink('upload/gambar/'.$paket->foto);
            $paket->foto= $nama_foto;
        }
        
        $paket->judul= $judul;
        $paket->destinasi= $destinasi;
        $paket->fasilitas= $fasilitas;
        $paket->bus= $bus;
        $paket->harga= $harga;
        $paket->deskripsi= $deskripsi;
        $paket->update();

        return redirect()->back()->with('sukses','paket berhasil ditambahkan');
    }
}
