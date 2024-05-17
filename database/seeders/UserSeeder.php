<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id'        => 1,
            'role_id'   => 1,
            'name'	    => 'Admin Multisite',
            'email'	    => 'admin@multisite.test',
            'password'	=> bcrypt('Password')
        ]);

        User::create([
            'id'        => 2,
            'role_id'   => 2,
            'name'	    => 'Admin Diskominfo',
            'email'	    => 'diskominfo@multisite.test',
            'password'	=> bcrypt('Password')
        ]);

        User::create([
            'id'        => 3,
            'role_id'   => 2,
            'name'	    => 'Admin Dinkes',
            'email'	    => 'dinkes@multisite.com',
            'password'	=> bcrypt('Password')
        ]);

        User::create([
            'id'        => 4,
            'role_id'   => 2,
            'name'	    => 'Admin Dp2kbp3a',
            'email'	    => 'dp2kbp3a@multisite.test',
            'password'	=> bcrypt('Password')
        ]);
    }
}
