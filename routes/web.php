<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignageController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\MedicationController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/hospital', [HospitalController::class, "index"]) ->name('hospital.index');
Route::get('/medication', [MedicationController::class, "index"]) ->name('medication.index');
Route::get('/hospital/{id}',[HospitalController::class, "show"])->name('show'); 
Route::get('/medication/{id}',[MedicationController::class, "show"])->name('show'); 
Route::get('/signboards/{id}',[SignageController::class, "show"])->name('show'); 
Route::get('/add/hospital', [HospitalController::class, "create"])->name('hospital.create');
Route::get('/edit/hospital/{hospital}', [HospitalController::class, "edit"])->name('hospital.edit');
Route::put('/edit/hospital/{hospital}', [HospitalController::class, "update"])->name('hospital.update');
Route::get('/add/medication', [MedicationController::class, "create"])->name('medication.create');
Route::post('/add/hospital', [HospitalController::class, "store"])->name('hospital.store');
Route::post('/add/medication', [MedicationController::class, "store"])->name('medication.store');
Route::post('/signboards', [SignageController::class, "store"])->name('store');
Route::delete('/signboards/{id}', [SignageController::class, "destroy"])->name('destroy');