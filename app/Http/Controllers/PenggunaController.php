<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    function tampil(){
        $pengguna =  User::orderBy('level', 'ASC')->get();
        return view('halaman.pengguna', compact('pengguna'));
    }

    function tambah(){
        return view('halaman.pengguna_tambah');
    }

    function hapus($id) {
        $pengguna = User::find($id);
        $pengguna->delete();
        return redirect()->back()->with('success','berhasil menghapus paket');
        
    }

    function edit($id){
        $pengguna = User::find($id);
        return view('halaman.pengguna_edit', compact('pengguna'));
        
    }

    function submit(Request $request){
        $nama= $request->nama;
        $email= $request->email;
        $level= $request->level;
        $password= bcrypt($request->password);
        
        $pengguna= new User();
        $pengguna->nama= $nama;
        $pengguna->email= $email;
        $pengguna->level= $level;
        $pengguna->password= $password;
        $pengguna->save();

        return redirect()->back()->with('sukses','pengguna berhasil ditambahkan');
    }

    function update(Request $request, $id){
        $nama= $request->nama;
        $email= $request->email;
        $level= $request->level;
        $password= bcrypt($request->password);

        $pengguna = User::find($id);
        
        $pengguna->nama= $nama;
        $pengguna->email= $email;
        $pengguna->level= $level;
        $pengguna->password= $password;
        $pengguna->update();

        return redirect()->back()->with('sukses','user berhasil ditambahkan');
    }
    
}
