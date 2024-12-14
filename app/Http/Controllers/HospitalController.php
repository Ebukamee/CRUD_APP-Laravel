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
    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string',
            'type' => 'required|string',
            'state' => 'required|string',
            'city' => 'required|string',
            'address' => 'required|string',
            'proprietor' => 'required|string',
            'director' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|mimes:jpg,png,jpeg,webp,jfif|max:3000',
        ]);
        if($request->has('image')) {
            $imageName =time(). '.' .$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/images/'),$imageName);
            $validated['image'] =$imageName;
        }
        hospital::create($validated);
        return redirect()->route('hospital.index');
    }
}




