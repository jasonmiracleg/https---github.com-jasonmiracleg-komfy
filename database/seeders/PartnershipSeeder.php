<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PartnershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('partnerships')->insert([
            'partnership_name' => 'Body Sculpture',
            'description' => 'Salah satu partner yang berkontribusi dalam bisnis Komfy. Body Sculpture adalah tempat fitness yang berada dalam pengawasan orang profesional, yaitu Steve Dee Franchin',
            'url' => 'https://instagram.com/bodysculpture_id?igshid=NzZlODBkYWE4Ng==',
            'partnership_picture' => 'images/body_sculpture.jpg',
        ]);
    }
}
