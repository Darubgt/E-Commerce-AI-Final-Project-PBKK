<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Produk;

class Ruangan extends Model
{
    protected $table = 'ruangans';
    protected $primaryKey = 'id_ruangan';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['id_ruangan', 'nama_ruangan', 'gambar_ruangan'];

    public function produk()
    {
        return $this->hasMany(Produk::class, 'ruangan_id_ruangan', 'id_ruangan');
    }
}
