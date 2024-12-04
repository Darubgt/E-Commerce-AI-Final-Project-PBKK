<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Produk;

class ProductController extends Controller
{
    public function page($id){
        $produk = Produk::findOrFail($id);
        $produklain = Produk::inRandomOrder()->take(8)->get();

        return view("product", compact("produk", "produklain"));
    }

    public function home(){
        $produk = Produk::all();
        $kategori =Item::all();

        return view("index", compact("produk", "kategori"));
    }
}
