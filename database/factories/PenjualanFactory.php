<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Penjualan::class, function (Faker $faker) {
    return [
        'no_faktur'   =>$faker ->numberBetween(1000,100000),
        'tgl_faktur'  =>$faker ->date,
        'total_bayar' =>$faker ->numberBetween(1000,100000),
        'pelanggan_id'=>$faker->randomElement(App\Model\Penjualan::select('id')->get()),
        'user_id'     =>$faker->numberBetween(1000,100000)
    ];
});
