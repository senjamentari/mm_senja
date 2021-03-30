<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Pembelian::class, function (Faker $faker) {
    return [
        'kode_masuk'    => "k" .sprintf('%08d',$faker->unique()->numberBetween(1,99999999)),
        'tanggal_masuk' =>$faker ->date,
        'total'         =>$faker ->numberBetween(1000,100000),
        'pemasok_id'    =>$faker ->randomElement(App\Model\Pemasok::select('id')->get()),
        'user_id'       =>$faker ->numberBetween(1000,100000)
    ];
});
