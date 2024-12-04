<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::create([
            'id_item' => 'IT01',
            'nama_item' => 'Storage',
            'gambar_item' => 'Images/homestorage.jpg'
        ]);
        
        Item::create([
            'id_item' => 'IT02',
            'nama_item' => 'Furniture',
            'gambar_item' => 'Images/furniture.jpg'
        ]);
        
        Item::create([
            'id_item' => 'IT03',
            'nama_item' => 'Bed',
            'gambar_item' => 'Images/bed.jpg'
        ]);
        
        Item::create([
            'id_item' => 'IT04',
            'nama_item' => 'Home Textiles',
            'gambar_item' => 'Images/hometextile.jpg'
        ]);
        
        Item::create([
            'id_item' => 'IT05',
            'nama_item' => 'Decoration',
            'gambar_item' => 'Images/decoration.jpg'
        ]);
        
        Item::create([
            'id_item' => 'IT06',
            'nama_item' => 'Lighting',
            'gambar_item' => 'Images/lighting.jpg'
        ]);
        
        Item::create([
            'id_item' => 'IT07',
            'nama_item' => 'Kitchenware & tableware',
            'gambar_item' => 'Images/tware.jpg'
        ]);
        
        Item::create([
            'id_item' => 'IT08',
            'nama_item' => 'Bathroom furniture and storage',
            'gambar_item' => 'Images/BathroomFurniture.jpg'
        ]);
        
        Item::create([
            'id_item' => 'IT09',
            'nama_item' => 'Plants and pots',
            'gambar_item' => 'Images/Plants.jpg'
        ]);
        
        Item::create([
            'id_item' => 'IT10',
            'nama_item' => 'Rugs, mats & flooring',
            'gambar_item' => 'Images/Rugs.jpg'
        ]);
        
        Item::create([
            'id_item' => 'IT11',
            'nama_item' => 'Laundry & cleaning',
            'gambar_item' => 'Images/Laundry.jpg'
        ]);
        
        Item::create([
            'id_item' => 'IT12',
            'nama_item' => 'Smart home',
            'gambar_item' => 'Images/smarthome.jpg'
        ]);
        
        Item::create([
            'id_item' => 'IT13',
            'nama_item' => 'Outdoor living',
            'gambar_item' => 'Images/outdoor.jpg'
        ]);
    }
}
