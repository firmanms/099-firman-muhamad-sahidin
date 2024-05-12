<?php

namespace Database\Seeders;

use App\Models\Site_user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Site_user::create([
            'site_id'   => 1,
            'user_id'   => 1,            
        ]);
    }
}
