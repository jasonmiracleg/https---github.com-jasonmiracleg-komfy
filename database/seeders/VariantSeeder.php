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
            'variant_name' => 'Grape',
            'price' => 40000,
            'category_id' => 2,
            'product_id' => 1
        ]);
        DB::table('variants')->insert([
            'variant_name' => 'Lychee',
            'price' => 50000,
            'category_id' => 2,
            'product_id' => 1
        ]);
        // DB::table('variants')->insert([
        //     'variant_name' => 'Orange',
        //     'category_id' => 2,
        //     'product_id' => 1
        // ]);
    }
}
