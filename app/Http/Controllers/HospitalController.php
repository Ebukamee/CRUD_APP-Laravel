<?php

namespace App\Http\Controllers;

use App\Models\hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function index() {
        $signages = hospital::orderBy("created_at", "desc")->paginate(12);
        return view('pages.hospital', ["hospital" => $signages]);
    }
    public function show($id) {
        $signboard = hospital::findOrFail($id);
        return view('pages.id', ["hospital" => $signboard]);
    }
    public function addhospitals() {
        return view("pages.addhospital");
    }
    // public function addDrugs() {
    //     return view("pages.signup");
    // }
    // public function store(Request $request) {
    //     $validated = $request->validate([
    //         'name' => 'required|string| max:20',
    //         'shape' => 'required|string| max:20',
    //         'size' => 'required|string| max:20',
    //         'imagePath' => 'required|string| max:20',
    //         'dojo_id' => 'required|exists:dojos,id'
    //     ]);
    //     Signage::create($validated);
    //     return redirect()->route('index');
    // }
}




