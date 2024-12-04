<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk::create([
            'id_produk' => 'P001',
            'nama_produk' => 'POÄNG',
            'deskripsi_produk' => 'Armchair, white stained oak veneer/Knisa light beige',
            'harga_produk' => 800000,
            'stok_produk' => 10,
            'gambar_produk' => 'Images/POÄNG.jpg',
            'item_id_item' => 'IT02',
            'ruangan_id_ruangan' => 'RU01'
        ]);
        
        Produk::create([
            'id_produk' => 'P002',
            'nama_produk' => 'RAMNEFJÄLL',
            'deskripsi_produk' => 'Upholstered bed frame, Kilanda light beige/Luröy, Standard Double',
            'harga_produk' => 2000000,
            'stok_produk' => 10,
            'gambar_produk' => 'Images/RAMNEFJÄLL.jpg',
            'item_id_item' => 'IT03',
            'ruangan_id_ruangan' => 'RU02'
        ]);
        
        Produk::create([
            'id_produk' => 'P003',
            'nama_produk' => 'PUGG',
            'deskripsi_produk' => 'Wall clock, stainless steel, 32 cm',
            'harga_produk' => 100000,
            'stok_produk' => 10,
            'gambar_produk' => 'Images/PUGG.jpg',
            'item_id_item' => 'IT05',
            'ruangan_id_ruangan' => 'RU02'
        ]);

        Produk::create([
            'id_produk' => 'P004',
            'nama_produk' => 'FEJKA',
            'deskripsi_produk' => 'Artificial potted plant with pot, in/outdoor succulent, 6 cm',
            'harga_produk' => 20000,
            'stok_produk' => 20,
            'gambar_produk' => 'Images/FEJKA.jpg',
            'item_id_item' => 'IT09',
            'ruangan_id_ruangan' => 'RU07'
        ]);

        Produk::create([
            'id_produk' => 'P005',
            'nama_produk' => 'LINDBYN',
            'deskripsi_produk' => 'Mirror, black, 80 cm',
            'harga_produk' => 650000,
            'stok_produk' => 10,
            'gambar_produk' => 'Images/LINDBYN.jpg',
            'item_id_item' => 'IT05',
            'ruangan_id_ruangan' => 'RU06'
        ]);

        Produk::create([
            'id_produk' => 'P006',
            'nama_produk' => 'BILLESHOLM',
            'deskripsi_produk' => '2-seat sofa, grey',
            'harga_produk' => 1795000,
            'stok_produk' => 5,
            'gambar_produk' => 'Images/BILLESHOLM.jpg',
            'item_id_item' => 'IT02',
            'ruangan_id_ruangan' => 'RU01'
        ]);

        Produk::create([
            'id_produk' => 'P007',
            'nama_produk' => 'ENHET',
            'deskripsi_produk' => 'Mirror cabinet with 1 door, white, 40x32x75 cm',
            'harga_produk' => 570000,
            'stok_produk' => 10,
            'gambar_produk' => 'Images/ENHET.jpg',
            'item_id_item' => 'IT05',
            'ruangan_id_ruangan' => 'RU06'
        ]);

        Produk::create([
            'id_produk' => 'P008',
            'nama_produk' => 'FARGRIK',
            'deskripsi_produk' => 'Mug, dark turquoise, 25 cl',
            'harga_produk' => 19900,
            'stok_produk' => 50,
            'gambar_produk' => 'Images/FARGRIK.jpg',
            'item_id_item' => 'IT07',
            'ruangan_id_ruangan' => 'RU04'
        ]);

        Produk::create([
            'id_produk' => 'P009',
            'nama_produk' => 'KNARREVIK',
            'deskripsi_produk' => 'Bedside table, bright yellow, 37x28 cm',
            'harga_produk' => 199000,
            'stok_produk' => 50,
            'gambar_produk' => 'Images/KNARREVIK.jpg',
            'item_id_item' => 'IT02',
            'ruangan_id_ruangan' => 'RU02'
        ]);

        Produk::create([
            'id_produk' => 'P010',
            'nama_produk' => 'VATTENTRAG',
            'deskripsi_produk' => 'Box with lid, 32x23x10 cm',
            'harga_produk' => 199000,
            'stok_produk' => 50,
            'gambar_produk' => 'Images/VATTENTRAG.jpg',
            'item_id_item' => 'IT01',
            'ruangan_id_ruangan' => 'RU05'
        ]);

        Produk::create([
            'id_produk' => 'P011',
            'nama_produk' => 'FREDRIKSJON',
            'deskripsi_produk' => 'Box with lid, 32x23x10 cm',
            'harga_produk' => 99900,
            'stok_produk' => 75,
            'gambar_produk' => 'Images/FREDRIKSJON.jpg',
            'item_id_item' => 'IT04',
            'ruangan_id_ruangan' => 'RU06'
        ]);

        Produk::create([
            'id_produk' => 'P012',
            'nama_produk' => 'ARSTID',
            'deskripsi_produk' => 'Table lamp, brass/white',
            'harga_produk' => 329000,
            'stok_produk' => 20,
            'gambar_produk' => 'Images/ARSTID.jpg',
            'item_id_item' => 'IT06',
            'ruangan_id_ruangan' => 'RU02'
        ]);

        Produk::create([
            'id_produk' => 'P013',
            'nama_produk' => 'TVALLEN/ENHET',
            'deskripsi_produk' => 'Open wash-stand with 2 shelves, anthracite/glypen tap, 64x43x65 cm',
            'harga_produk' => 3664900,
            'stok_produk' => 3,
            'gambar_produk' => 'Images/TVALLENENHET.jpg',
            'item_id_item' => 'IT08',
            'ruangan_id_ruangan' => 'RU06'
        ]);

        Produk::create([
            'id_produk' => 'P014',
            'nama_produk' => 'RUNNEN',
            'deskripsi_produk' => 'Floor decking, outdoor, brown stained, 0.81 m^2',
            'harga_produk' => 345000,
            'stok_produk' => 10,
            'gambar_produk' => 'Images/RUNNEN.jpg',
            'item_id_item' => 'IT10',
            'ruangan_id_ruangan' => 'RU07'
        ]);

        Produk::create([
            'id_produk' => 'P015',
            'nama_produk' => 'PEPPRIG',
            'deskripsi_produk' => 'Cleaning set, blue/yellow',
            'harga_produk' => 349000,
            'stok_produk' => 10,
            'gambar_produk' => 'Images/PEPPRIG.jpg',
            'item_id_item' => 'IT11',
            'ruangan_id_ruangan' => 'RU01'
        ]);

        Produk::create([
            'id_produk' => 'P016',
            'nama_produk' => 'PRAKTLYSING',
            'deskripsi_produk' => 'Cellular blind, smart wireless/battery-operated white, 100x195 cm',
            'harga_produk' => 2499000,
            'stok_produk' => 2,
            'gambar_produk' => 'Images/PRAKTLYSING.jpg',
            'item_id_item' => 'IT12',
            'ruangan_id_ruangan' => 'RU01'
        ]);

        Produk::create([
            'id_produk' => 'P017',
            'nama_produk' => 'HAMNON',
            'deskripsi_produk' => 'Hammock, anthracite/white, 150x265 cm',
            'harga_produk' => 599000,
            'stok_produk' => 3,
            'gambar_produk' => 'Images/HAMNON.jpg',
            'item_id_item' => 'IT13',
            'ruangan_id_ruangan' => 'RU07'
        ]);

        Produk::create([
            'id_produk' => 'P018',
            'nama_produk' => 'NORRARYD/SKOGSTA',
            'deskripsi_produk' => 'Table and 6 chairs, acacia/black, 235x100 cm',
            'harga_produk' => 17869000,
            'stok_produk' => 1,
            'gambar_produk' => 'Images/NORRARYD.jpg',
            'item_id_item' => 'IT02',
            'ruangan_id_ruangan' => 'RU03'
        ]);

        Produk::create([
            'id_produk' => 'P019',
            'nama_produk' => 'BROR',
            'deskripsi_produk' => 'Storage with cabinet/work bench, black/pine plywood, 340x40x191 cm',
            'harga_produk' => 18560000,
            'stok_produk' => 1,
            'gambar_produk' => 'Images/BROR.jpg',
            'item_id_item' => 'IT01',
            'ruangan_id_ruangan' => 'RU08'
        ]);
    }
}
