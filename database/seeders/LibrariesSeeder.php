<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LibrariesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('libraries')->insert([
            'nama_akun' => Str::random(10),
            'judul_video' => Str::random(20),
            'jumlah_view' => Number::rand(0, 1000000),
            'waktu_upload' => Date::time(),
            'durasi_menit_video' => Number::rand(0, 60),
        ]);

        
    }
}
