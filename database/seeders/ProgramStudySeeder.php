<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramStudySeeder extends Seeder
{
    public function run()
    {
       DB::table('program_studies')->insert([
    ['name' => 'D3 Teknik Informatika', 'faculty' => 'Teknik Informatika'],
    ['name' => 'D4 Rekayasa Keamanan Siber', 'faculty' => 'Teknik Informatika'],
    ['name' => 'D4 Multimedia dan Jaringan', 'faculty' => 'Teknik Informatika'],
    ['name' => 'D4 Teknologi Rekayasa Multimedia', 'faculty' => 'Teknik Informatika'],
    ['name' => 'D4 Teknologi Permainan', 'faculty' => 'Teknik Informatika'],
    ['name' => 'D4 Magister Terapan (S2) / Teknik Komputer', 'faculty' => 'Teknik Informatika'],
    ['name' => 'D4 Rekayasa Perangkat Lunak', 'faculty' => 'Teknik Informatika'],
    ['name' => 'D4 Animasi', 'faculty' => 'Teknik Informatika'],
    ['name' => 'D3 Teknologi Geomatika', 'faculty' => 'Teknik Informatika'],

    ['name' => 'D3 Akuntansi', 'faculty' => 'Manajemen dan Bisnis'],
    ['name' => 'D4 Akuntansi Manajerial', 'faculty' => 'Manajemen dan Bisnis'],
    ['name' => 'D4 Administrasi Bisnis Terapan', 'faculty' => 'Manajemen dan Bisnis'],
    ['name' => 'D4 Logistik Perdagangan Internasional', 'faculty' => 'Manajemen dan Bisnis'],
    ['name' => 'D2 Jalur Cepat Distribusi Barang', 'faculty' => 'Manajemen dan Bisnis'],

    ['name' => 'D3 Teknik Elektronika Manufaktur', 'faculty' => 'Teknik Elektro'],
    ['name' => 'D4 Teknologi Rekayasa Elektronika', 'faculty' => 'Teknik Elektro'],
    ['name' => 'D3 Teknik Instrumentasi', 'faculty' => 'Teknik Elektro'],
    ['name' => 'D4 Teknik Mekatronika', 'faculty' => 'Teknik Elektro'],
    ['name' => 'D4 Teknologi Rekayasa Pembangkit Energi', 'faculty' => 'Teknik Elektro'],
    ['name' => 'D4 Teknologi Rekayasa Robotika', 'faculty' => 'Teknik Elektro'],

    ['name' => 'D3 Teknik Mesin', 'faculty' => 'Teknik Mesin'],
    ['name' => 'D3 Teknik Perawatan Pesawat Udara', 'faculty' => 'Teknik Mesin'],
    ['name' => 'D4 Teknologi Rekayasa Konstruksi Perkapalan', 'faculty' => 'Teknik Mesin'],
    ['name' => 'D4 Teknologi Rekayasa Pengelasan dan Fabrikasi', 'faculty' => 'Teknik Mesin'],
    ['name' => 'D4 Teknologi Rekayasa Metalurgi', 'faculty' => 'Teknik Mesin'],

    ['name' => 'Program Profesi Insinyur', 'faculty' => 'Profesi'],
]);

    }
}
