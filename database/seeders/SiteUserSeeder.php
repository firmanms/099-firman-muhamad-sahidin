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
            'id'        => 1,
            'site_id'   => 1,
            'user_id'   => 1,
        ]);

        Site_user::create([
            'id'        => 2,
            'site_id'   => 2,
            'user_id'   => 2,
        ]);

        Site_user::create([
            'id'        => 3,
            'site_id'   => 3,
            'user_id'   => 3,
        ]);

        Site_user::create([
            'id'        => 4,
            'site_id'   => 4,
            'user_id'   => 4,
        ]);

        Site_user::create([
            'id'        => 5,
            'site_id'   => 5,
            'user_id'   => 5,
        ]);

        Site_user::create([
            'id'        => 6,
            'site_id'   => 6,
            'user_id'   => 6,
        ]);
    }
}
