<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Taufik Syarul Hidayat',
            'email' => 'hidayattaufiksyarul@gmail.com',
            'nim' => '200401070',
            'password' => '123'
        ]);
    }
}
