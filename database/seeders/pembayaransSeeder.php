<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class PembayaransSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $murid = DB::table("siswa")->first();
        $petugases = DB::table("petugas")->first();
        $spp = DB::table("spp")->where('id_spp', $murid->id_spp)->first();


        //
        DB::table("pembayaran")->insertGetId([
            'id_pembayaran' => rand(1,100),
            'id_petugas' => $petugases->id_petugas,
            'nisn' => $murid->nisn,
            'tgl_bayar' => now(),
            'bulan_dibayar' => str::random(8),
            'tahun_dibayar' => str::random(4),
            'id_spp' => $spp->id_spp,
            'jumlah_bayar' => rand(20, 105),
        ]);
    }
}