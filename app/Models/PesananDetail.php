<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Pesanan;

class PesananDetail extends Model
{
    protected $fillable = [
        'jumlah_pesanan',
        'total_harga',
        'catatan',
        'nomor',
        'product_id',
        'pesanan_id',
    ];

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'pesanan_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}