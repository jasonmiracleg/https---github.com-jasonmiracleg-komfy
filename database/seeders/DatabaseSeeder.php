<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(RoleSeeder::class);
        DB::table('users')->insert([
            'name' => 'Ivana',
            'email' => "ivana@gmail.com",
            'password' => bcrypt('12345678'),
            'profile_picture' => "image/User_icon.png",
            'telephone' => '0123142514',
            'role_id' => 1,
            'is_login' => '0',
            'is_active' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'Yobel',
            'email' => "yobel@gmail.com",
            'password' => bcrypt('12345678'),
            'profile_picture' => "image/User_icon.png",
            'telephone' => '0123142514',
            'role_id' => 2,
            'is_login' => '0',
            'is_active' => '1',
        ]);
        $this->call(ProductSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(VariantSeeder::class);
        $this->call(ProductPictureSeeder::class);
        $this->call(BillSeeder::class);
        $this->call([OrderSeeder::class, AccountSeeder::class]);
    }
}
