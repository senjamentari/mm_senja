<?php

use Illuminate\Database\Seeder;
use App\Model\Pembelian;
use Illuminate\Support\Str;

class PembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Pembelian::class,50)->create();
    }
}
