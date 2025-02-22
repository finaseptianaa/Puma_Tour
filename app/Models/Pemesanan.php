<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{

    use HasFactory;

    protected $table = 'pemesanan';

    function paket() {
        return $this->belongsTo(Paket::class, 'paket_id');
    }

    function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    function transaksi() {
        return $this->hasOne(Transaksi::class, 'pemesanan_id');
        
    }
    
}
