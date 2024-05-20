<?php

namespace Database\Seeders;

use App\Models\Sites_user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sites_user::create([
            'id'        => 1,
            'sites_id'   => 1,
            'user_id'   => 1,
        ]);

        Sites_user::create([
            'id'        => 2,
            'sites_id'   => 2,
            'user_id'   => 2,
        ]);

        Sites_user::create([
            'id'        => 3,
            'sites_id'   => 3,
            'user_id'   => 3,
        ]);

        Sites_user::create([
            'id'        => 4,
            'sites_id'   => 4,
            'user_id'   => 4,
        ]);
    }
}
