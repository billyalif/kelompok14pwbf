<?php

namespace Database\Seeders;


use App\Models\Barang;
use App\Models\Kota;
use App\Models\Supplier;
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
        Barang::factory(20)->create();
        Kota::factory(10)->create();
        Supplier::factory(10)->create();    }
}
