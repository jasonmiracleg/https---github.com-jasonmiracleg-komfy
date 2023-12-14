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
            'variant_name' => 'Teh',
            'category_id' => 1,
            'product_id' => 2
        ]);
        DB::table('variants')->insert([
            'variant_name' => 'Kopi',
            'category_id' => 2,
            'product_id' => 1
        ]);
    }
}
