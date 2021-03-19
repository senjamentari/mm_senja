<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Barang::class, function (Faker $faker) {
    return [
        'kode_barang' => "k" .sprintf('%08d',$faker->unique()->numberBetween(1,99999999)),
        'produk_id' => $faker->randomElement(App\Model\Produk::select('id')->get()),
        'nama_barang' => $faker->randomElement(['Mie Sedap Ayam Bawang', 'Sabun Lifebuoy']),
        'satuan' =>$faker->randomElement(['pcs','item','kardus']),
        'harga_jual' =>$faker->numberBetween(100,100000),
        'stok' =>$faker->numberBetween(1,1000)
    ];
});
