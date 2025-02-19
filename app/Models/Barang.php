<?php

namespace App\Models;

use App\Models\Penjualan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $guarded = [];
    //mass assignment
    public function penjualans()
    {
        return $this->hasMany(Penjualan::class);
    }
}
