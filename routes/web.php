<?php

route::get('/','HomeController@index');
Route::resource('pemasok','PemasokController');
Route::resource('barang','BarangController');