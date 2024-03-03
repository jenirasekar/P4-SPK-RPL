<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    protected $fillable = [
        'id_user',
        'total',
        'dibayarkan',
        'kembalian',
        'nama_kasir',
        'status',
        'id_pelanggan'
    ];

    public function transaksi_detail_list()
    {
        return $this->hasMany(TransaksiDetail::class);
    }
}
