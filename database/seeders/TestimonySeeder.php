<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TestimonySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testimonies')->insert([
            'description' => 'VARIAN STRAWBERRY MANTAB BANGEETTT SEGERNYAAA, COCOK BANGET BUAT PECINTA KECUT / MANIS YANG SEGEERR SEGEERRR !!!',
            'is_accepted' => '1',
            'user_id' => 2
        ]);
        DB::table('testimonies')->insert([
            'description' => 'Komfy merupakan minuman yang enak dan sehat. Sebagai orang yang tidak menyukai kombucha, aku kaget saat pertama kali mencoba komfy dan menyukainya. Komfy perlahan-lahan merubah perspektifku terhadap kombucha.',
            'is_accepted' => '1',
            'user_id' => 3
        ]);
    }
}
