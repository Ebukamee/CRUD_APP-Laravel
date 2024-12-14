<?php

namespace App\Http\Controllers;

use App\Models\Medication;
use Illuminate\Http\Request;

class MedicationController extends Controller
{
    public function index() {
        $data = medication::orderBy("created_at", "desc")->paginate(12);
        return view('pages.medication.view', ["drugs" => $data]);
    }
    public function show($id) {
        $data = medication::findOrFail($id);
        return view('pages.medication.id', ["drugs" => $data]);
    }
    public function create() {
        return view("pages.medication.add");
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
