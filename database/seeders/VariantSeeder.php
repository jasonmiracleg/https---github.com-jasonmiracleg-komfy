<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class VariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('variants')->insert([
            'variant_name' => 'Original',
            'price' => 28000,
            'category_id' => 2,
            'product_id' => 1
        ]);
        DB::table('variants')->insert([
            'variant_name' => 'Butterfly Pea',
            'price' => 30000,
            'category_id' => 2,
            'product_id' => 1
        ]);
        DB::table('variants')->insert([
            'variant_name' => 'Strawberry',
            'price' => 35000,
            'category_id' => 2,
            'product_id' => 1
        ]);

    }
}
