<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin ',
            'username' => 'Admin',
            'level' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => ' Retribusi',
            'username' => 'Retribusi',
            'level' => 'wajib',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user123'),
            'remember_token' => Str::random(60),
        ]);
    }
}