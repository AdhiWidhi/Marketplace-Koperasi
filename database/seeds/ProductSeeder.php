<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'nama' => 'Nike Hype',
            'kategori_id' => 2,
            'stok' => 3,
            'gambar' => 'NikeHype.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minus.'
        ]);

        DB::table('products')->insert([
            'nama' => 'Nike Casual',
            'kategori_id' => 2,
            'stok' => 3,
            'gambar' => 'Casual.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minus.'
        ]);

        DB::table('products')->insert([
            'nama' => 'Adidas Sport',
            'kategori_id' => 2,
            'stok' => 3,
            'gambar' => 'adidasw.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minus.'
        ]);

        DB::table('products')->insert([
            'nama' => 'Adidas Cool Black',
            'kategori_id' => 2,
            'stok' => 3,
            'gambar' => 'adidasb.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minus.'
        ]);

        DB::table('products')->insert([
            'nama' => 'Air Jordan',
            'kategori_id' => 2,
            'stok' => 3,
            'gambar' => 'airjordan.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minus.'
        ]);

        DB::table('products')->insert([
            'nama' => 'Shirt',
            'kategori_id' => 1,
            'stok' => 3,
            'gambar' => 'shirt.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minus.'
        ]);

        DB::table('products')->insert([
            'nama' => 'Kemeja',
            'kategori_id' => 1,
            'stok' => 3,
            'gambar' => 'kemeja.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minus.'
        ]);

        DB::table('products')->insert([
            'nama' => 'PC Gaming Hyper',
            'kategori_id' => 4,
            'stok' => 3,
            'gambar' => 'pc1.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minus.'
        ]);

        DB::table('products')->insert([
            'nama' => 'IMAC',
            'kategori_id' => 4,
            'stok' => 3,
            'gambar' => 'imac.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minus.'
        ]);

        DB::table('products')->insert([
            'nama' => 'Iphone 10',
            'kategori_id' => 4,
            'stok' => 3,
            'gambar' => 'hp1.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minus.'
        ]);

        DB::table('products')->insert([
            'nama' => 'Iphone 10x',
            'kategori_id' => 4,
            'stok' => 3,
            'gambar' => 'hp2.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minus.'
        ]);

        DB::table('products')->insert([
            'nama' => 'Sova Nyaman',
            'kategori_id' => 3,
            'stok' => 3,
            'gambar' => 'sova.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minus.'
        ]);
    }
}