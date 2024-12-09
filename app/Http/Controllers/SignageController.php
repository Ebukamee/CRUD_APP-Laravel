<?php

namespace App\Http\Controllers;

use App\Models\Signage;
use Illuminate\Http\Request;

class SignageController extends Controller
{
    public function index() {
        $signages = Signage::orderBy("created_at", "desc")->paginate(10);
        return view('pages.home', ["signages" => $signages]);
    }
    public function show($id) {
        $signboard = Signage::findOrFail($id);
        return view('pages.id', ["signboard" => $signboard]);
    }
    public function addhospitals() {
        return view("pages.addhospital");
    }
    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string| max:20',
            'shape' => 'required|string| max:20',
            'size' => 'required|string| max:20',
            'imagePath' => 'required|string| max:20',
            'dojo_id' => 'required|exists:dojos,id'
        ]);
        Signage::create($validated);
        return redirect()->route('index');
    }
}
