<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
            'nama' => 'Pakaian Pria & Wanita',
            'gambar' => 'pakaian.png',
        ]);

        DB::table('kategoris')->insert([
            'nama' => 'Sepatu Pria & Wanita',
            'gambar' => 'sepatu.png',
        ]);

        DB::table('kategoris')->insert([
            'nama' => 'Kebutuhan Rumah Tangga',
            'gambar' => 'rumahtangga.png',
        ]);

        DB::table('kategoris')->insert([
            'nama' => 'Komputer & Smarthphone',
            'gambar' => 'elektronik.png',
        ]);
    }
}