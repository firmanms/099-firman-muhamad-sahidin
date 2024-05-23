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
            'greeting'      => 'Dengan adanya pengelolaan aplikasi yang terpusat, Perangkat Daerah tidak perlu lagi melakukan maintenance ebsite dan server secara mandiri. Hal ini tidak hanya mengurangi beban kerja dan tanggung jawab di tingkat wilayah, tetapi juga mengurangi biaya operasional yang timbul dari kebutuhan perawatan dan pemeliharaan sistem IT. Selain itu, proses ini memungkinkan adanya standar kualitas yang konsisten dan peningkatan keamanan data, karena semua dikelola oleh tim ahli di Diskominfo yang berpengalaman.',
            'video_profile' => 'https://www.youtube.com/watch?v=ByAn8DF8Ykk',
            'address'       => 'Jl. Diponegoro No.22, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115',
            'telp'          => '022-00000000',
            'whatsapp'      => '62820000000',
            'email'         => 'presiden@multisite.test',
        ]);

        Sites::create([
            'id'            => 2,
            'name'          => 'Dinas Komunikasi dan Informatika',
            'singkatan'     => 'Diskominfo',
            'slug'          => 'diskominfo',
            'name_leader'   => 'Firman Muhamad Sahidin,S.ST.,MT',
            'greeting'      => 'Untuk mendukung kegiatan diseminasi informasi, maka perlu membuat media tersendiri dalam bentuk website (multisite.test/diskominfo) yang menyajikan informasi baik dalam bentu news maupun data yang dibutuhkan oleh masyarakat dan mudah diakses melalui internet kapan dan dimana saja. Kehadiran website Diskominfo ini diharapkan dapat menjadi solusi dalam mendapatkan informasi terkait Dnas Komunikasi Informatika Statistik dan Persandian Prov. Jabar mulai dari Profil, Visi Misi, Tupoksi, Struktur Organisasi, dan Nama para Pejabat. Di website multisite.test/diskominfo ini juga memuat tentang Kegiatan Diskominfo. Disamping itu juga ada Produk Hukum terkait dengan Perda, Pergub dan Info Publik, Saya berharap dengan kehadiran Website multisite.test/diskominfo diharapkan dapat menjadi solusi dalam mendapatkan informasi terkait Dinas Komunikasi Informatika Statistik dan Persandian Prov Jabar.',
            'video_profile' => 'https://www.youtube.com/watch?v=ByAn8DF8Ykk',
            'address'       => 'Jl. Diponegoro No.22, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115',
            'telp'          => '022-00000000',
            'whatsapp'      => '62820000000',
            'email'         => 'diskominfo@multisite.test',
        ]);

        Sites::create([
            'id'            => 3,
            'name'          => 'Dinas Kesehatan',
            'singkatan'     => 'Dinkes',
            'slug'          => 'dinkes',
            'name_leader'   => 'Muhamad Sahidin,S.ST.,MT',
            'greeting'      => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'video_profile' => 'https://www.youtube.com/watch?v=ByAn8DF8Ykk',
            'address'       => 'Jl. Diponegoro No.22, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115',
            'telp'          => '022-00000000',
            'whatsapp'      => '62820000000',
            'email'         => 'dinkes@multisite.test',
        ]);

        Sites::create([
            'id'            => 4,
            'name'          => 'Dinas Pengendalian Penduduk, Keluarga Berencana, Pemberdayaan Perempuan dan Perlindungan Anak',
            'singkatan'     => 'DP2KBP3A',
            'slug'          => 'dp2kbp3a',
            'name_leader'   => 'Muhamad Firman Sahidin,S.ST.,MT',
            'greeting'      => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'video_profile' => 'https://www.youtube.com/watch?v=ByAn8DF8Ykk',
            'address'       => 'Jl. Diponegoro No.22, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115',
            'telp'          => '022-00000000',
            'whatsapp'      => '62820000000',
            'email'         => 'dp2kbp3a@multisite.test',
        ]);

        Sites::create([
            'id'            => 5,
            'name'          => 'Badan Kepegawaian Daerah',
            'singkatan'     => 'BKAD',
            'slug'          => 'bkd',
            'name_leader'   => 'Iman Firman Sahidin,S.ST.,MT',
            'greeting'      => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'video_profile' => 'https://www.youtube.com/watch?v=ByAn8DF8Ykk',
            'address'       => 'Jl. Diponegoro No.22, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115',
            'telp'          => '022-00000000',
            'whatsapp'      => '62820000000',
            'email'         => 'bkd@multisite.test',
        ]);

        Sites::create([
            'id'            => 6,
            'name'          => 'Dinas Sosial',
            'singkatan'     => 'DINSOS',
            'slug'          => 'dinsos',
            'name_leader'   => 'Baginda Firman Sahidin,S.ST.,MT',
            'greeting'      => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'video_profile' => 'https://www.youtube.com/watch?v=ByAn8DF8Ykk',
            'address'       => 'Jl. Diponegoro No.22, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115',
            'telp'          => '022-00000000',
            'whatsapp'      => '62820000000',
            'email'         => 'dinsos@multisite.test',
        ]);
    }
}
