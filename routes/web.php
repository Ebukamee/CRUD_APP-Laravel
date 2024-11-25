<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/contact',function() {
    $name = [
        ['id' => 2345678765432, 'name'=> 'Onyeka Okoh', 'Position'=>'HRBP'],
        ['id'=> 2345675645432, 'name' => 'Peter Ani', 'Position' => 'BM'],
        ['id'=> 2345678123432, 'name' => 'Tunde Ojo', 'Position' => 'TPMC'],
        ['id'=> 2345678765432, 'name' => 'Evelyn Asiwu', 'Position' => 'Planning Manager'],
    ];
    return view('Contact', ['names' => $name]);
});