<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ruangan;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ruangan::create([
            'id_ruangan' => 'RU01',
            'nama_ruangan' => 'Living room',
            'gambar_ruangan' => 'Images/livingroom.jpg'    
        ]);
        
        Ruangan::create([
            'id_ruangan' => 'RU02',
            'nama_ruangan' => 'Bedroom',
            'gambar_ruangan' => 'Images/bedroom.jpg'
        ]);
        
        Ruangan::create([
            'id_ruangan' => 'RU03',
            'nama_ruangan' => 'Dining',
            'gambar_ruangan' => 'Images/dining.jpg'
        ]);
        
        Ruangan::create([
            'id_ruangan' => 'RU04',
            'nama_ruangan' => 'Kitchen',
            'gambar_ruangan' => 'Images/kitchen.jpg'
        ]);
        
        Ruangan::create([
            'id_ruangan' => 'RU05',
            'nama_ruangan' => 'Office',
            'gambar_ruangan' => 'Images/office.jpg'
        ]);

        Ruangan::create([
            'id_ruangan' => 'RU06',
            'nama_ruangan' => 'Bathroom',
            'gambar_ruangan' => 'Images/bathroom.jpg'
        ]);
        
        Ruangan::create([
            'id_ruangan' => 'RU07',
            'nama_ruangan' => 'Garden',
            'gambar_ruangan' => 'Images/garden.jpg'
        ]);
        
        Ruangan::create([
            'id_ruangan' => 'RU08',
            'nama_ruangan' => 'Garage',
            'gambar_ruangan' => 'Images/garage.jpg'
        ]);
    }
}
