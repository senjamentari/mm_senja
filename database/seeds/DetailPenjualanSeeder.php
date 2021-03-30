<?php

use Illuminate\Database\Seeder;
use App\Model\Detail_Penjualan;
use Illuminate\Support\Str;

class DetailPenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Detail_Penjualan::class,50)->create();
    }
}
