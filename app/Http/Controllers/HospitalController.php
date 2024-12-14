<?php

namespace App\Http\Controllers;

use App\Models\hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function index() {
        $data = hospital::orderBy("created_at", "desc")->paginate(12);
        return view('pages.hospital.view', ["hospital" => $data]);
    }
    public function show($id) {
        $data = hospital::findOrFail($id);
        return view('pages.hospital.id', ["hospital" => $data]);
    }
    public function create() {
        return view("pages.hospital.add");
    }
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




