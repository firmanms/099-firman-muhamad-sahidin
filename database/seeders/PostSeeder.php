<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'site_id'          => 2,
            'post_category_id'	=> 1,
            'title'	            => 'Apa Itu Diskominfo',
            'slug'          	=> 'apa-itu-diskominfo',
            'description'       => 'Diskominfo mempunyai tugas membantu Bupati melaksanakan urusan pemerintahan ',
            'date_publish'      => '2024-05-20',
        ]);

        Post::create([
            'site_id'          => 2,
            'post_category_id'	=> 2,
            'title'	            => 'Kegiatan Diskominfo',
            'slug'          	=> 'kegiatan-diskominfo',
            'description'       => 'Tim Teknis Monitoring kegiatan dan evaluasi terhadap laporan yang ada',
            'date_publish'      => '2024-05-20',
        ]);

        Post::create([
            'site_id'          => 2,
            'post_category_id'	=> 3,
            'title'	            => 'Pengumuman Diskominfo',
            'slug'          	=> 'pengumuman-diskominfo',
            'description'       => 'Pengumuman dari Diskominfo perihal akan dilaksanakannya seleksi penerimaan pegawai non PNS',
            'date_publish'      => '2024-05-20',
        ]);

        Post::create([
            'site_id'          => 3,
            'post_category_id'	=> 1,
            'title'	            => 'Apa Itu dinkes',
            'slug'          	=> 'apa-itu-dinkes',
            'description'       => 'dinkes mempunyai tugas membantu Bupati melaksanakan urusan pemerintahan ',
            'date_publish'      => '2024-05-20',
        ]);

        Post::create([
            'site_id'          => 3,
            'post_category_id'	=> 2,
            'title'	            => 'Kegiatan dinkes',
            'slug'          	=> 'kegiatan-dinkes',
            'description'       => 'Tim Teknis Monitoring kegiatan dan evaluasi terhadap laporan yang ada',
            'date_publish'      => '2024-05-20',
        ]);

        Post::create([
            'site_id'          => 3,
            'post_category_id'	=> 3,
            'title'	            => 'Pengumuman dinkes',
            'slug'          	=> 'pengumuman-dinkes',
            'description'       => 'Pengumuman dari dinkes perihal akan dilaksanakannya seleksi penerimaan pegawai non PNS',
            'date_publish'      => '2024-05-20',
        ]);

        Post::create([
            'site_id'          => 4,
            'post_category_id'	=> 1,
            'title'	            => 'Apa Itu dp2kbp3a',
            'slug'          	=> 'apa-itu-dp2kbp3a',
            'description'       => 'dp2kbp3a mempunyai tugas membantu Bupati melaksanakan urusan pemerintahan ',
            'date_publish'      => '2024-05-20',
        ]);

        Post::create([
            'site_id'          => 4,
            'post_category_id'	=> 2,
            'title'	            => 'Kegiatan dp2kbp3a',
            'slug'          	=> 'kegiatan-dp2kbp3a',
            'description'       => 'Tim Teknis Monitoring kegiatan dan evaluasi terhadap laporan yang ada',
            'date_publish'      => '2024-05-20',
        ]);

        Post::create([
            'site_id'          => 4,
            'post_category_id'	=> 3,
            'title'	            => 'Pengumuman dp2kbp3a',
            'slug'          	=> 'pengumuman-dp2kbp3a',
            'description'       => 'Pengumuman dari dp2kbp3a perihal akan dilaksanakannya seleksi penerimaan pegawai non PNS',
            'date_publish'      => '2024-05-20',
        ]);

        Post::create([
            'site_id'          => 5,
            'post_category_id'	=> 1,
            'title'	            => 'Apa Itu bkd',
            'slug'          	=> 'apa-itu-bkd',
            'description'       => 'bkd mempunyai tugas membantu Bupati melaksanakan urusan pemerintahan ',
            'date_publish'      => '2024-05-20',
        ]);

        Post::create([
            'site_id'          => 5,
            'post_category_id'	=> 2,
            'title'	            => 'Kegiatan bkd',
            'slug'          	=> 'kegiatan-bkd',
            'description'       => 'Tim Teknis Monitoring kegiatan dan evaluasi terhadap laporan yang ada',
            'date_publish'      => '2024-05-20',
        ]);

        Post::create([
            'site_id'          => 5,
            'post_category_id'	=> 3,
            'title'	            => 'Pengumuman bkd',
            'slug'          	=> 'pengumuman-bkd',
            'description'       => 'Pengumuman dari bkd perihal akan dilaksanakannya seleksi penerimaan pegawai non PNS',
            'date_publish'      => '2024-05-20',
        ]);

        Post::create([
            'site_id'          => 6,
            'post_category_id'	=> 1,
            'title'	            => 'Apa Itu dinsos',
            'slug'          	=> 'apa-itu-dinsos',
            'description'       => 'dinsos mempunyai tugas membantu Bupati melaksanakan urusan pemerintahan ',
            'date_publish'      => '2024-05-20',
        ]);

        Post::create([
            'site_id'          => 6,
            'post_category_id'	=> 2,
            'title'	            => 'Kegiatan dinsos',
            'slug'          	=> 'kegiatan-dinsos',
            'description'       => 'Tim Teknis Monitoring kegiatan dan evaluasi terhadap laporan yang ada',
            'date_publish'      => '2024-05-20',
        ]);

        Post::create([
            'site_id'          => 6,
            'post_category_id'	=> 3,
            'title'	            => 'Pengumuman dinsos',
            'slug'          	=> 'pengumuman-dinsos',
            'description'       => 'Pengumuman dari dinsos perihal akan dilaksanakannya seleksi penerimaan pegawai non PNS',
            'date_publish'      => '2024-05-20',
        ]);




    }
}
