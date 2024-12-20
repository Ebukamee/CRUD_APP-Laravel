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
        $states = [
            "Abia", "Adamawa", "Akwa Ibom", "Anambra", "Bauchi", 
            "Bayelsa", "Benue", "Borno", "Cross River", "Delta", 
            "Ebonyi", "Edo", "Ekiti", "Enugu", "Gombe", 
            "Imo", "Jigawa", "Kaduna", "Kano", "Katsina", 
            "Kebbi", "Kogi", "Kwara", "Lagos", "Nasarawa", 
            "Niger", "Ogun", "Ondo", "Osun", "Oyo", 
            "Plateau", "Rivers", "Sokoto", "Taraba", "Yobe", 
            "Zamfara", "FCT"
        ];
        $type = array('General Hospital','Teaching Hospital','Medical Centre','Specialist Hospital','Clinic','Primary Healthcare Centre');
        $prop = array('Mission','Private', 'State Government', 'Federal Government', 'Local Government','Charity');
        return view("pages.hospital.add",['type'=>$type, 'prop' => $prop, 'states' => $states]);
    }
    public function update(Request $request,hospital $hospital) {
        $validated = $request->validate([
            'name' => 'required|string',
            'type' => 'required|string',
            'state' => 'required|string',
            'city' => 'required|string',
            'address' => 'required|string',
            'proprietor' => 'required|string',
            'director' => 'required|string',
            'description' => 'required|string',
            'url' => 'required|string',
            'image' => 'sometimes|mimes:jpg,png,jpeg,webp,jfif|max:3000',
        ]);
        if($request->has('image')) {
            $destination = 'uploads/images/'. $hospital -> image;
            if(\File::exists ($destination)) {
                \File::delete($destination);       
               }
               $imageName =time(). '.' .$request->image->getClientOriginalExtension();
               $request->image->move(public_path('uploads/images/'),$imageName);
               $validated['image'] =$imageName;
        }
        $hospital -> update($validated);
        return redirect()->route('hospital.show', $hospital->id)->with('success', 'Hospital updated successfully!');
    }
    public function edit(hospital $hospital) {
        $states = [
            "Abia", "Adamawa", "Akwa Ibom", "Anambra", "Bauchi", 
            "Bayelsa", "Benue", "Borno", "Cross River", "Delta", 
            "Ebonyi", "Edo", "Ekiti", "Enugu", "Gombe", 
            "Imo", "Jigawa", "Kaduna", "Kano", "Katsina", 
            "Kebbi", "Kogi", "Kwara", "Lagos", "Nasarawa", 
            "Niger", "Ogun", "Ondo", "Osun", "Oyo", 
            "Plateau", "Rivers", "Sokoto", "Taraba", "Yobe", 
            "Zamfara", "FCT"
        ];
    
        $type = ['General Hospital', 'Teaching Hospital', 'Medical Centre', 'Specialist Hospital', 'Clinic', 'Primary Healthcare Centre'];
        $prop = ['Mission', 'Private', 'State Government', 'Federal Government', 'Local Government', 'Charity'];
    
        return view('pages.hospital.edit', compact('hospital', 'type', 'prop', 'states'));
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
            'url' => 'required|string',
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
    public function destroy($id) {
        $hospital = hospital::findOrFail($id);
        $hospital ->delete();
        return redirect()->route('hospital.index')->with('success', 'Hospital deleted successfully!');;
    }
}




