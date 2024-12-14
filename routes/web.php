<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignageController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\MedicationController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/hospital', [HospitalController::class, "index"]) ->name('index');
Route::get('/medication', [MedicationController::class, "index"]) ->name('index');
Route::get('/hospital/{id}',[HospitalController::class, "show"])->name('show'); 
Route::get('/signboards/{id}',[SignageController::class, "show"])->name('show'); 
Route::get('/add/hospital', [HospitalController::class, "create"])->name('create');
Route::get('/add/medication', [SignageController::class, "addDrugs"])->name('addDrugs');
Route::post('/signboards', [SignageController::class, "store"])->name('store');
Route::delete('/signboards/{id}', [SignageController::class, "destroy"])->name('destroy');