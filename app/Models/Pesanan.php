<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    public function admin()
    {
        return $this->belongsTo(User::class);
    }

    public function detailpesanans()
    {
        return $this->hasMany(DetailPesanan::class);
    }
}
