<?php

use Illuminate\Database\Seeder;
use App\Model\Tampung_bayar;
use Illuminate\Support\Str;

class TampungBayarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Tampung_bayar::class,50)->create();
    }
}
