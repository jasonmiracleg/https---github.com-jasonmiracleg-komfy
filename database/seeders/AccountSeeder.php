<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Account::create([
            'account_type' => 'Pemasukan'
        ]);
        Account::create([
            'account_type' => 'Pengeluaran'
        ]);
        Account::create([
            'account_type' => 'Modal'
        ]);
        Account::create([
            'account_type' => 'Investasi'
        ]);
    }
}
