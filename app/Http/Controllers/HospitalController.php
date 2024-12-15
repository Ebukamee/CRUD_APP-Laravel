<?php

namespace App\Http\Controllers;

use App\Models\hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
        $response = Http::get('https://states-and-cities.com/api/v1/states');
        $states = [];
       if ($response->successful()) {
        $states = $response->json(); // Decode JSON response
        }
        $type = array('General Hospital','Teaching Hospital','Medical Centre','Specialist Hospital','Clinic','Primary Healthcare Centre');
        $prop = array('Mission','Private', 'State Government', 'Federal Government', 'Local Government','Charity');
        return view("pages.hospital.add",['type'=>$type, 'prop' =>$prop, 'states' => $states]);
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
        return redirect()->route('hospital.index')->with('success', 'Hospital added successfully!');
    }
}




