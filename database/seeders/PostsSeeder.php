<?php

namespace Database\Seeders;

use App\Models\posts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        posts::create([
            'title' => 'programing',
            'body' => 'programing',
            'slug' => 'programing',
            'user_id' => '1',
            'category_id' => '1',
        ]);
    }
}
