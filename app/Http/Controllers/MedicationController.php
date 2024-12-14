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
            'name' => 'required|string',
            'type' => 'required|string',
            'active' => 'required|string',
            'indication' => 'required|string',
            'manufacturer' => 'required|string',
            'side' => 'required|string'
            'image' => 'required|mimes:jpg,png,jpeg,jfif'
        ]);
        if($request ->has('image')) {
            $imageName =time(). '.' .$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/images/'),$imageName);
            $validated['image'] =$imageName;
        }
        medication::create($validated);
        return redirect()->route('medication.index')->with('success', 'Medication added successfully!');
    }
}
