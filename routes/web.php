<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignageController;
use App\Http\Controllers\HospitalController;

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
Route::get('/hospital', [HospitalController::class, "index"]) ->name('index');
Route::get('/hospital/{id}',[HospitalController::class, "show"])->name('show'); 
Route::get('/signboards/{id}',[SignageController::class, "show"])->name('show'); 
Route::get('/add/hospital', [SignageController::class, "addhospitals"])->name('addhospitals');
Route::get('/add/medication', [SignageController::class, "addDrugs"])->name('addDrugs');
Route::post('/signboards', [SignageController::class, "store"])->name('store');
Route::delete('/signboards/{id}', [SignageController::class, "destroy"])->name('destroy');