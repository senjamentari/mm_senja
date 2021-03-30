<?php

use Illuminate\Database\Seeder;
use App\Model\DetailPembelian;
use Illuminate\Support\Str;

class DetailPembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Detail_Pembelian::class,50)->create();
    }
}
