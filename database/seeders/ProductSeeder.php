<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'product_name' => 'KOMFY 1',
            'description' => 'rasanya enak sekali',
            'price' => 50000
        ]);
        DB::table('products')->insert([
            'product_name' => 'KOMFY 2',
            'description' => 'rasanya mantap sekali',
            'price' => 40000
        ]);
    }
}
