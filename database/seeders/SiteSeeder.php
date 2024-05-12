<?php

namespace Database\Seeders;

use App\Models\Sites;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sites::create([
            'id'            => 1,
            'name'          => 'Admin',
            'singkatan'     => 'Admin',
            'slug'          => 'admin',
            'name_leader'   => 'Presiden',
            'greeting'      => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'video_profile' => 'https://www.youtube.com/watch?v=ByAn8DF8Ykk',
            'address'       => 'jalani aja',
            'telp'          => '022-00000000',
            'whatsapp'      => '62820000000',
            'email'         => 'presiden@multisite.com',
        ]);
    }
}
