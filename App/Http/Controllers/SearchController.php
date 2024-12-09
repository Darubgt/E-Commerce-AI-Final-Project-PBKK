<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Produk;
use App\Models\Ruangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class SearchController extends Controller
{
    public function textSearch(Request $request)
    {
        $query = $request->input('query');
        
        // Search products by name or description
        $produk = Produk::where('nama_produk', 'like', "%{$query}%")
                           ->orWhere('deskripsi_produk', 'like', "%{$query}%")
                        //    ->orWhere('item_id_item', 'like', Item::where('nama_item', 'like',"%{$query}%")->get()->id_item)
                        //    ->orWhere('ruangan_id_ruangan', 'like', Ruangan::where('nama_ruangan', 'like',"%{$query}%")->get()->id_ruangan)
                           ->get();
        
        return view('searched', compact('produk'));
    }

    public function category($id){
        $produk = Produk::where('item_id_item', $id)->get();
        return view("searched", compact( "produk"));
    }

    /**
     * Search products by image AI
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public static function imageSearchAI (Request $request){

        $file = $request->file('file');
        $query = base64_encode(file_get_contents($file));
        $response = Http::post('http://localhost:5001/search', [
            'query' => $query
        ]);

        $results = $response->json();
        $keywords = explode(" " , $results['message']);
        // dd($keywords);
        $produk = Produk::where(function ($q) use ($keywords) {
            foreach ($keywords as $word) {
                $q->orWhere('tag_gambar', 'like', "%{$word}%");
            }
        })->get();

        // return $results;
        return view('searched', compact('produk'))->with('image', 'Your Image');
    }

    public static function labelerStart (){
        $produk = Produk::all();
        foreach ($produk as $p) {
            $query = base64_encode(file_get_contents( 'c:/laragon/www/toko/public/' . $p->gambar_produk));
            $response = Http::post('http://localhost:5001/putlabel', [
                'query' => $query
            ]);

            $results = $response->json();
            $p->tag_gambar = $results['message'];
            $p->save();
        }
        dd($results);
    }
}
