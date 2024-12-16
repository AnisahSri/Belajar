<?php

namespace Database\Seeders;

use Illuminate\Database\Seedrs;
use Illuminate\Support\Facades\DB;

class PerpustakaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('perpustakaans') ->insert([
            ['judul_buku' => 'Buku 1', 'penulis' => 'Penulis A', 'tahun_terbit' => 2020],
            ['judul_buku' => 'Buku 2', 'penulis' => 'Penulis B', 'tahun_terbit' => 2021],
            ['judul_buku' => 'Buku 3', 'penulis' => 'Penulis C', 'tahun_terbit' => 2022],
        ]);
    }
}
