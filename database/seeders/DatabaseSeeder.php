<?php

namespace Database\Seeders;

// use App\Models\Kelas;
// use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Seed User
        DB::table('user')->insert([
            'name' => 'fauzi',
            'email' => 'seringcoding@gmail.com',
            'password' => Crypt::encrypt('12345678')
        ]);

        // Seed Kelas
        DB::table('kelas')->insert([
            'id_kelas' => 1,
            'kelas' => 'X'
        ]);
        DB::table('kelas')->insert([
            'id_kelas' => 2,
            'kelas' => 'XI'
        ]);

        // Seed Jurusan
        DB::table('jurusan')->insert([
            'id_jurusan' => 1,
            'nama_jurusan' => 'Akuntansi',
            'slug_jurusan' => 'AK'
        ]);
        DB::table('jurusan')->insert([
            'id_jurusan' => 2,
            'nama_jurusan' => 'Animasi',
            'slug_jurusan' => 'AN'
        ]);
        DB::table('jurusan')->insert([
            'id_jurusan' => 3,
            'nama_jurusan' => 'Broadcasting dan Perfilman',
            'slug_jurusan' => 'BP'
        ]);
        DB::table('jurusan')->insert([
            'id_jurusan' => 4,
            'nama_jurusan' => 'Desain Komunikasi Visual',
            'slug_jurusan' => 'DKV'
        ]);
        DB::table('jurusan')->insert([
            'id_jurusan' => 5,
            'nama_jurusan' => 'Manajemen Perkantoran',
            'slug_jurusan' => 'MP'
        ]);
        DB::table('jurusan')->insert([
            'id_jurusan' => 6,
            'nama_jurusan' => 'Pengembangan Perangkat Lunak dan Gim',
            'slug_jurusan' => 'PPLG'
        ]);
        DB::table('jurusan')->insert([
            'id_jurusan' => 7,
            'nama_jurusan' => 'Teknik Jaringan Komputer dan Telekomunikasi',
            'slug_jurusan' => 'TJKT'
        ]);
        DB::table('jurusan')->insert([
            'id_jurusan' => 8,
            'nama_jurusan' => 'Akuntansi dan Keuangan Lembaga',
            'slug_jurusan' => 'AKL'
        ]);
        DB::table('jurusan')->insert([
            'id_jurusan' => 9,
            'nama_jurusan' => 'Manajemen Perkantoran dan Layanan Bisnis',
            'slug_jurusan' => 'MPLB'
        ]);
        DB::table('jurusan')->insert([
            'id_jurusan' => 10,
            'nama_jurusan' => 'Produksi dan Siaran Program Televisi',
            'slug_jurusan' => 'PSPT'
        ]);
        DB::table('jurusan')->insert([
            'id_jurusan' => 11,
            'nama_jurusan' => 'Rekayasa Perangkat Lunak',
            'slug_jurusan' => 'RPL'
        ]);
        DB::table('jurusan')->insert([
            'id_jurusan' => 12,
            'nama_jurusan' => 'Teknik Komputer dan Jaringan',
            'slug_jurusan' => 'TKJ'
        ]);

        // Seed Mata Pelajaran
        DB::table('mata_pelajaran')->insert([
            'id_mapel' => 1,
            'nama_mapel' => 'Pend. Agama dan Budi Pekerti',
            'tanggal_ujian' => 'Selasa, 03 Juni 2025',
            'waktu_ujian' => '07.30 - 09.00'
        ]);
        DB::table('mata_pelajaran')->insert([
            'id_mapel' => 2,
            'nama_mapel' => 'Pend. Pancasila dan Kewarganegaraan',
            'tanggal_ujian' => 'Selasa, 03 Juni 2025',
            'waktu_ujian' => '09.30 - 11.00'
        ]);
        DB::table('mata_pelajaran')->insert([
            'id_mapel' => 3,
            'nama_mapel' => 'Sejarah',
            'tanggal_ujian' => 'Selasa, 03 Juni 2025',
            'waktu_ujian' => '11.00 - 12.30'
        ]);
        DB::table('mata_pelajaran')->insert([
            'id_mapel' => 4,
            'nama_mapel' => 'Bahasa Indonesia',
            'tanggal_ujian' => 'Rabu, 04 Juni 2025',
            'waktu_ujian' => '07.30 - 09.00'
        ]);
        DB::table('mata_pelajaran')->insert([
            'id_mapel' => 5,
            'nama_mapel' => 'Matematika',
            'tanggal_ujian' => 'Rabu, 04 Juni 2025',
            'waktu_ujian' => '09.30 - 11.00'
        ]);
        DB::table('mata_pelajaran')->insert([
            'id_mapel' => 6,
            'nama_mapel' => 'Seni Budaya (X)',
            'tanggal_ujian' => 'Rabu, 04 Juni 2025',
            'waktu_ujian' => '11.00 - 12.30'
        ]);
        DB::table('mata_pelajaran')->insert([
            'id_mapel' => 7,
            'nama_mapel' => 'Bahasa Inggris',
            'tanggal_ujian' => 'Kamis, 04 Juni 2025',
            'waktu_ujian' => '07.30 - 09.00'
        ]);
        DB::table('mata_pelajaran')->insert([
            'id_mapel' => 8,
            'nama_mapel' => 'Projek IPAS (X) dan PKK (XI)',
            'tanggal_ujian' => 'Kamis, 05 Juni 2025',
            'waktu_ujian' => '09.30 - 11.00'
        ]);
        DB::table('mata_pelajaran')->insert([
            'id_mapel' => 9,
            'nama_mapel' => 'Informatika',
            'tanggal_ujian' => 'Kamis, 05 Juni 2025',
            'waktu_ujian' => '11.00 - 12.30'
        ]);
    }
}
