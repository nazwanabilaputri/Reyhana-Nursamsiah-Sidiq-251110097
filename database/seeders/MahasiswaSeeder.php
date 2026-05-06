<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            ['nama' => 'Ahmad Fauzi',        'nim' => '202610001', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Bunga Citra Lestari', 'nim' => '202610002', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Candra Wijaya',       'nim' => '202610003', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Dedi Kurniawan',      'nim' => '202610004', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Fika Putri Pratama',  'nim' => '202610005', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Yusuf Mansur',        'nim' => '202610196', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Yulia Rahmawati',     'nim' => '202610197', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Zahra Amalia',        'nim' => '202610198', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Zainal Abidin',       'nim' => '202610199', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Zulkifli Hasan',      'nim' => '202610200', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Kurnia Ramadhan',     'nim' => '202610011', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Laila Sari',          'nim' => '202610012', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Maulana Malik',       'nim' => '202610013', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Nina Marlina',        'nim' => '202610014', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Oki Setiana',         'nim' => '202610015', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Putu Gede',           'nim' => '202610016', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Qori Sandi',          'nim' => '202610017', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Rian Hidayat',        'nim' => '202610018', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Siti Aminah',         'nim' => '202610019', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Taufik Hidayat',      'nim' => '202610020', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Ujang Sumantri',      'nim' => '202610021', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Vina Panduwinata',    'nim' => '202610022', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Wahyu Pratama',       'nim' => '202610023', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Xenia Putri',         'nim' => '202610024', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Yosep Iskandar',      'nim' => '202610025', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Zidni Ilman',         'nim' => '202610026', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Adisty Larasati',     'nim' => '202610027', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Bagas Saputra',       'nim' => '202610028', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Citra Handayani',     'nim' => '202610029', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Dimas Anggara',       'nim' => '202610030', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Erna Wulandari',      'nim' => '202610031', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Farhan Abimanyu',     'nim' => '202610032', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Galih Rakasiwi',      'nim' => '202610033', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Hana Pertiwi',        'nim' => '202610034', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Irfan Hakim',         'nim' => '202610035', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Jihan Fahira',        'nim' => '202610036', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Kenjiro Satria',      'nim' => '202610037', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Lucky Perdana',       'nim' => '202610038', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Maya Safira',         'nim' => '202610039', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Naufal Azhar',        'nim' => '202610040', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Olivia Jensen',       'nim' => '202610041', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Panji Petualang',     'nim' => '202610042', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Qania Syakila',       'nim' => '202610043', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Rama Wijaya',         'nim' => '202610044', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Salsa Bila',          'nim' => '202610045', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Tegar Septian',       'nim' => '202610046', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Ulfa Dwiyanti',       'nim' => '202610047', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Verrel Bramasta',     'nim' => '202610048', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Wisnu Wardhana',      'nim' => '202610049', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Yudha Pratama',       'nim' => '202610050', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Zara Adhisty',        'nim' => '202610051', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Andre Taulany',       'nim' => '202610052', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Bella Shofie',        'nim' => '202610053', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Chiko Jerikho',       'nim' => '202610054', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Deni Sumargo',        'nim' => '202610055', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Enzy Storia',         'nim' => '202610056', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Ferry Irawan',        'nim' => '202610057', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Gading Marten',       'nim' => '202610058', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Purwadinata',         'nim' => '202610059', 'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Herlambang',          'nim' => '202610060', 'jurusan' => 'Teknik Informatika'],
        ]);
    }
}