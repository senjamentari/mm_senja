<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Pelanggan::class, function (Faker $faker) {
    return [
        'kode_pelanggan'=>"K" .sprintf('%08', $faker ->unique()->numberBetween(1,100000)),
        'nama'          =>$faker ->name,
        'alamat'        =>$faker ->address,
        'no_telp'       =>$faker ->phoneNumber,
        'email'         =>$faker ->email
    ];
});
