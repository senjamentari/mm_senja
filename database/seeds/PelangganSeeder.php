<?php

use Illuminate\Database\Seeder;
use App\Model\Pelanggan;
use Illuminate\Support\Str;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Pelanggan::class,50)->create();
    }
}
