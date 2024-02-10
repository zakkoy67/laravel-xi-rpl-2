<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class kelasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("kelas")->insert([
            'id_kelas' => rand(1,25),
            'nama_kelas' => str::random(10),
            'kompetensi_keahlian' => str::random(50),
        ]);

    }
}