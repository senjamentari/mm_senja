<?php

use Illuminate\Database\Seeder;
use App\Model\Penjualan;
use Illuminate\Support\Str;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Penjualan::class,50)->create();
    }
}
