<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Detail_Penjualan::class, function (Faker $faker) {
    return [
        'penjualan_id' =>$faker ->randomElement(App\Model\Penjualan::select('id')->get()),
        'barang_id'    =>$faker ->randomElement(App\Model\Barang::select('id')->get()),
        'harga_jual'   =>$faker ->numberBetween(1000,100000),
        'jumlah'       =>$faker ->numberBetween(1000,100000),
        'sub_total'    =>$faker ->numberBetween(1000,100000)
    ];
});
