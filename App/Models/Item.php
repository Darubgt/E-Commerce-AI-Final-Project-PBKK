<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Produk;

class Item extends Model
{
    protected $table = 'items';
    protected $primaryKey = 'id_item';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['id_item', 'nama_item', 'gambar_item'];

    public function produk()
    {
        return $this->hasMany(Produk::class, 'item_id_item', 'id_item');
    }
}
