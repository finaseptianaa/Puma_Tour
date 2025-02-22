<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Paket;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $paket = Paket::orderBy('id', 'desc')->get();
        return view('home', compact('paket'));
    }
}
