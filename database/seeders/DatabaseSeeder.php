<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Level;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        Level::create([
            'nm_level' => 'admin'
        ]);

        Level::create([
            'nm_level' => 'user'
        ]);

        User::create([
            'name'=>'salwa',
            'email'=>'sal@gmail.com',
            'levels_id' => 1,
            'password'=>bcrypt('1111')
        ]);
        User::create([
            'name'=>'user',
            'email'=>'user@gmail.com',
            'levels_id' => 2,
            'password'=>bcrypt('1111')
        ]);

        Kategori::create([
            'name'=>'gigi anak',
        ]);
        Kategori::create([
            'name'=>'kesehatan kulit',
        ]);
        Kategori::create([
            'name'=>'nutrisi',
        ]);
        Kategori::create([
            'name'=>'kebugaran',
        ]);
        Kategori::create([
            'name'=>'mental',
        ]);
        Artikel::create([
            'title' => '5 Permasalahan gigi pada anak',
            'category_id' => 1,
            'deskripsi' => 'panduan kesehatan pada gigi kini',
            'tinjauan' => 'ditinjau secara benar oleh admint',
            'gambar'=>''
        ]);
        Artikel::create([
            'title' => '7 Permasalahan kulit',
            'category_id' => 2,
            'deskripsi' => 'kebersihan kulit harus di utamakan',
            'tinjauan' => 'ditinjau secara benar oleh admint',
            'gambar'=>''
        ]);
    }
}
