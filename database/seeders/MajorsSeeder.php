<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MajorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('majors')->insert([
            [
                'name' => 'SI Teknik Informatika',
                'code' => '00001',
                'description' => 'Program studi yang mempelajari tentang rekayasa perangkat lunak dan sistem komputer.',
            ],
            [
                'name' => 'SI Sistem Informasi',
                'code' => '00002',
                'description' => 'Menggabungkan ilmu komputer dan bisnis untuk membangun sistem informasi organisasi.',
            ],
            [
                'name' => 'SI Teknik Elektro',
                'code' => '00003',
                'description' => 'Fokus pada pembelajaran listrik, elektronik, dan pemrograman sistem kendali.',
            ],
            [
                'name' => 'SI Teknik Mesin',
                'code' => '00004',
                'description' => 'Mempelajari desain, analisis, dan manufaktur sistem mekanik dan termal.',
            ],
            [
                'name' => 'SI Manajemen',
                'code' => '00005',
                'description' => 'Program studi tentang pengelolaan bisnis, sumber daya manusia, dan strategi organisasi.',
            ],
        ]);
    }
}
