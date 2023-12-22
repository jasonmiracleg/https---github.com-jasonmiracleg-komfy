<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductPictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_pictures')->insert([
            'picture' => 'lychee_1.JPG',
            'variant_id' => 1
        ]);
        DB::table('product_pictures')->insert([
            'picture' => 'lychee_2.JPG',
            'variant_id' => 1
        ]);
        DB::table('product_pictures')->insert([
            'picture' => 'lychee_3.JPG',
            'variant_id' => 1
        ]);
        DB::table('product_pictures')->insert([
            'picture' => 'grape_1.JPG',
            'variant_id' => 2
        ]);
        DB::table('product_pictures')->insert([
            'picture' => 'grape_2.JPG',
            'variant_id' => 2
        ]);
        DB::table('product_pictures')->insert([
            'picture' => 'grape_3.JPG',
            'variant_id' => 2
        ]);
        DB::table('product_pictures')->insert([
            'picture' => 'strawberry_1.JPG',
            'variant_id' => 3
        ]);
        DB::table('product_pictures')->insert([
            'picture' => 'strawberry_2.JPG',
            'variant_id' => 3
        ]);
        DB::table('product_pictures')->insert([
            'picture' => 'strawberry_3.JPG',
            'variant_id' => 3
        ]);
    }
}
