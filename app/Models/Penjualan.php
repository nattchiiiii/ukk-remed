<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    public function barang()
    {
    Return $this->belongsTo(Barang::class, 'id_barang');
    }
    Public function user()
    {
    Return $this->belongsTo(User::class, 'id_user');
    }
    }
