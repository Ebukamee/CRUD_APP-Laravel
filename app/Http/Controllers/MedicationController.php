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
        return view('pages.medication.id', ["drug" => $data]);
    }
    public function create() {
        return view("pages.medication.add");
    }
    public function edit(Medication $medication) {
        return view('pages.medication.edit', compact('medication'));
    }
    public function update(Request $request, Medication $medication) {
        $validated = $request->validate([
            'name' => 'required|string',
            'type' => 'required|string',
            'active' => 'required|string',
            'indication' => 'required|string',
            'manufacturer' => 'required|string',
            'side' => 'required|string',
            'image' => 'sometimes|mimes:jpg,png,jpeg,jfif|max:3000'
        ]);
        if($request ->has('image')) {
            $destination = 'uploads/images/'. $medication -> image;
            if(\File::exists ($destination)) {
                \File::delete($destination);       
               }
            $imageName =time(). '.' .$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/images/'),$imageName);
            $validated['image'] =$imageName;
        }
        $medication -> update($validated);
        return redirect()->route('medication.show', $medication->id)->with('success', 'Medication Updated successfully!');
    }
    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string',
            'type' => 'required|string',
            'active' => 'required|string',
            'indication' => 'required|string',
            'manufacturer' => 'required|string',
            'side' => 'required|string',
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
public function destroy(Medication $drug) {
    $drug ->delete();
    return redirect()->route('medication.index')
}