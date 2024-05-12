<?php

namespace Database\Seeders;

use App\Models\Post_category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post_category::create([
            'name' => 'Artikel',
        ]);

        Post_category::create([
            'name' => 'Kegiatan',
        ]);

        Post_category::create([
            'name' => 'Pengumuman',
        ]);
    }
}
