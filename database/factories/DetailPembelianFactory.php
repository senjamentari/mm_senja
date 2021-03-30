<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Detail_Pembelian::class, function (Faker $faker) {
    return [
        'pembelian_id' =>$faker ->randomElement(App\Model\Pembelian::select('id')->get()),
        'barang_id'    =>$faker ->randomElement(App\Model\Barang::select('id')->get()),
        'harga_beli'   =>$faker ->numberBetween(1000,100000),
        'jumlah'       =>$faker ->numberBetween(1000,100000),
        'sub_total'    =>$faker ->numberBetween(1000,100000)
    ];
});
