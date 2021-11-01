<?php

namespace Database\Seeders;



use App\Models\Kota;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Kota::factory(200)->create();

    }
}
