<?php

use Illuminate\Database\Seeder;
use App\Model\Produk;
use Illuminate\Support\Str;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Produk::class,50)->create();
    }
}
