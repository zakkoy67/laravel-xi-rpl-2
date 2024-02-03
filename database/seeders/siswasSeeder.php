<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;
class SiswasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $getIdKelas = DB::table("kelas")->insertGetId([
            'id_kelas' => rand(1,25),
            'nama_kelas' => str::random(10),
            'kompetensi_keahlian' => str::random(50),
        ]);

        $getIdSpp = DB::table('spp')->insertGetId([
            'id_spp' => rand(1,10),
            'tahun'=> random_int(2000,2024),
            'nominal'=> random_int(1,20),
        ]);

        DB::table("siswa")->insert([
            'nisn' => rand(1,50),
            'nis' => rand(1,10),
            'nama' => "zaki",
            'id_kelas' => $getIdKelas,
            'alamat' => "Karawang",
            'no_telp' => "081219892663",
            'id_spp' => $getIdSpp,
        ]);
    }
}