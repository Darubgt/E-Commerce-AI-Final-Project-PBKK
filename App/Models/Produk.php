<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produks';
    protected $primaryKey = 'id_produk';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_produk',
        'nama_produk',
        'deskripsi_produk',
        'harga_produk',
        'stok_produk',
        'gambar_produk',
        'item_id_item',
        'ruangan_id_ruangan'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id_item', 'id_item');
    }

    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class, 'ruangan_id_ruangan', 'id_ruangan');
    }
}
