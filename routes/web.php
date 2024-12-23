<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignageController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\MedicationController;
use App\Http\Controllers\ProfileController;
use App\Models\hospital;
use App\Models\Medication;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/hospital', [HospitalController::class, "index"]) ->name('hospital.index');
Route::get('/medication', [MedicationController::class, "index"]) ->name('medication.index');
Route::get('/hospital/{id}',[HospitalController::class, "show"])->name('hospital.show'); 
Route::get('/medication/{id}',[MedicationController::class, "show"])->name('medication.show'); 
Route::get('/add/hospital', [HospitalController::class, "create"])->name('hospital.create')->middleware('auth');
Route::get('/edit/hospital/{hospital}', [HospitalController::class, "edit"])->name('hospital.edit')->middleware('auth');
Route::put('/edit/medication/{medication}', [MedicationController::class, "update"])->name('medication.update')->middleware('auth');
Route::get('/edit/medication/{medication}', [MedicationController::class, "edit"])->name('medication.edit')->middleware('auth');
Route::put('/edit/hospital/{hospital}', [HospitalController::class, "update"])->name('hospital.update')->middleware('auth');
Route::get('/add/medication', [MedicationController::class, "create"])->name('medication.create')->middleware('auth');
Route::post('/add/hospital', [HospitalController::class, "store"])->name('hospital.store')->middleware('auth');
Route::post('/add/medication', [MedicationController::class, "store"])->name('medication.store')->middleware('auth');
Route::delete('/medication/{id}', [MedicationController::class, "destroy"])->name('medication.destroy')->middleware('auth');
Route::delete('/hospital/{id}', [HospitalController::class, "destroy"])->name('hospital.destroy')->middleware('auth');





Route::get('/dashboard', function () {
    $username = auth()->user()->username;
    $hospitals = hospital::where('username', $username)
    ->orderBy('created_at', 'desc')
    ->get();
    $medications = Medication::where('username', $username)
    ->orderBy('created_at', 'desc')
    ->get();
    return view('dashboard',compact('hospitals','medications'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
