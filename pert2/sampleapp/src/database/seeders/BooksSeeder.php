<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            ['title'=>'One Piece', 'author'=> 'Elichiro Oda', 'publisher' => 'Shueisha', 'available' => true],
            ['title'=>'Naruto', 'author'=> 'Masashi Kishimoto', 'publisher' => 'Shueisha', 'available' => true],
        ]);
    }
}
