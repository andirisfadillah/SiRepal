<?php

namespace Database\Seeders;

use App\Models\JenisKapal;
use App\Models\Kapal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisKapalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JenisKapal::create([
            'jenis_kapal' => 'KAPAL LAUD',
            'biaya_retribusi' => '1000000',
        ]);

        JenisKapal::create([
            'jenis_kapal' => 'KAPAL KARAM',
            'biaya_retribusi' => '1000000',
        ]);

        JenisKapal::create([
            'jenis_kapal' => 'KAPAL TERBANG',
            'biaya_retribusi' => '1000000',
        ]);
    }
}
