<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Tampung_bayar::class, function (Faker $faker) {
    return [
        'penjualan_id'=>$faker->randomElement(App\Model\Penjualan::select('id')->get()),
        'total'       =>$faker ->numberBetween(1000,100000),
        'terima'      =>$faker ->numberBetween(1000,100000),
        'kembali'     =>$faker ->numberBetween(1000,100000)

    ];
});
