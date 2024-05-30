<?php

namespace Database\Seeders;

use App\Models\Slide;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slide::create([
            'site_id'   => 1,
            'title'     => 'Selamat datang di Multisite',
            'subtitle'  => 'Multisite Perangkat Daerah merupakan implementasi dari standardisasi website seluruh perangkat daerah di lingkungan Pemerintah Provinsi Jawa Barat.',
            // 'image'     => 'frontend/portal/assets/img/slide/slide-1.jpg',
        ]);

        Slide::create([
            'site_id'   => 1,
            'title'     => 'Manfaat Multisite',
            'subtitle'  => 'Memudahkan Perangkat Daerah yang ingin membuat atau membangun ulang websitenya.',
            // 'image'     => 'frontend/portal/assets/img/slide/slide-2.jpg',
        ]);

        Slide::create([
            'site_id'   => 1,
            'title'     => 'Maintenance efisien',
            'subtitle'  => 'Maintenance server website menjadi lebih efisien, karena server multisite terpusat di satu server.',
            // 'image'     => 'frontend/portal/assets/img/slide/slide-3.jpg',
        ]);

        Slide::create([
            'site_id'   => 2,
            'title'     => 'Selamat datang di Website Kami',
            'subtitle'  => 'Multisite Perangkat Daerah merupakan implementasi dari standardisasi website seluruh perangkat daerah di lingkungan Pemerintah Provinsi Jawa Barat.',
            // 'image'     => 'frontend/portal/assets/img/slide/slide-1.jpg',
        ]);

        Slide::create([
            'site_id'   => 3,
            'title'     => 'Selamat datang di Website Kami',
            'subtitle'  => 'Multisite Perangkat Daerah merupakan implementasi dari standardisasi website seluruh perangkat daerah di lingkungan Pemerintah Provinsi Jawa Barat.',
            // 'image'     => 'frontend/portal/assets/img/slide/slide-1.jpg',
        ]);

        Slide::create([
            'site_id'   => 4,
            'title'     => 'Selamat datang di Website Kami',
            'subtitle'  => 'Multisite Perangkat Daerah merupakan implementasi dari standardisasi website seluruh perangkat daerah di lingkungan Pemerintah Provinsi Jawa Barat.',
            // 'image'     => 'frontend/portal/assets/img/slide/slide-1.jpg',
        ]);

        Slide::create([
            'site_id'   => 5,
            'title'     => 'Selamat datang di Website Kami',
            'subtitle'  => 'Multisite Perangkat Daerah merupakan implementasi dari standardisasi website seluruh perangkat daerah di lingkungan Pemerintah Provinsi Jawa Barat.',
            // 'image'     => 'frontend/portal/assets/img/slide/slide-1.jpg',
        ]);

        Slide::create([
            'site_id'   => 6,
            'title'     => 'Selamat datang di Website Kami',
            'subtitle'  => 'Multisite Perangkat Daerah merupakan implementasi dari standardisasi website seluruh perangkat daerah di lingkungan Pemerintah Provinsi Jawa Barat.',
            // 'image'     => 'frontend/portal/assets/img/slide/slide-1.jpg',
        ]);


    }
}
