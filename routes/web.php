<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignageController;

Route::get('/', function () {
    return view('home');
});
// Route::get('/contact',function() {
//     $name = [
//         ['id' => 2345678765432, 'name'=> 'Onyeka Okoh', 'Position'=>'HRBP'],
//         ['id'=> 2345675645432, 'name' => 'Peter Ani', 'Position' => 'BM'],
//         ['id'=> 2345678123432, 'name' => 'Tunde Ojo', 'Position' => 'TPMC'],
//         ['id'=> 2345678765432, 'name' => 'Evelyn Asiwu', 'Position' => 'Planning Manager'],
//     ];
//     return view('Contact', ['names' => $name]);
// });
Route::get('/signboards', [SignageController::class, "index"]) ->name('index');
Route::get('/signboards/{id}',[SignageController::class, "show"])->name('show'); 
Route::get('/create', [SignageController::class, "create"])->name('create');
Route::post('/signboards', [SignageController::class, "store"])->name('store');