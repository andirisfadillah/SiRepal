<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bank::create([
            'nama_bank' => 'BRI',
        ]);

        Bank::create([
            'nama_bank' => 'BCA',
        ]);

        Bank::create([
            'nama_bank' => 'MANDIRI',
        ]);
    }
}
