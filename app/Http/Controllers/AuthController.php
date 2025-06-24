<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function login() {
        return view('login');
    }

    function loginSubmit(Request $request) {
       $kredensial = $request->only('email','password');

       if (Auth::attempt($kredensial)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard'); 
       }
       return redirect()->back()->with('gagal','email atau password salah');
    }

    function registrasi() {
        return view('registrasi');
    }

    function registrasiSubmit(Request $request) {
        $nama = $request->nama;
        $email = $request->email;
        $password = $request->password;

        $cekuser = User::where('email',$email)->first();
        if ($cekuser) {
            return redirect()->back()->with('gagal','email pengguna sudah terdaftar, gunakan email lainya');
        }

        $user = new User();
        $user->nama = $nama;
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->level = "konsumen";

        $user->save();
        return redirect('/login');
    }

    function logout() {
        Auth::logout();
        return redirect('/');
    }
}
