<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('libraries')->insert([
                'nama_akun' => Str::random(10),
                'judul_video' => Str::random(20),
                'jumlah_view' => rand(0, 1000000),
                'durasi_menit_video' => rand(0, 60),
            ]);
        }
    }
}
