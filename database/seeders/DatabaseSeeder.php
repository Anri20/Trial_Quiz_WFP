<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use PharIo\Manifest\Library;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $this->call(LibrarySeeder::class);
    }
}
