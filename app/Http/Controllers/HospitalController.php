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
    public function show($id, Request $request) {
        $data = hospital::findOrFail($id);
        $user = $request->user();
        return view('pages.hospital.id', ["hospital" => $data,'user'=>$user]);
    }
    public function create(Request $request) {
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
        $user = $request->user();
        $type = array('General Hospital','Teaching Hospital','Medical Centre','Specialist Hospital','Clinic','Primary Healthcare Centre');
        $prop = array('Mission','Private', 'State Government', 'Federal Government', 'Local Government','Charity');
        return view("pages.hospital.add",['type'=>$type, 'prop' => $prop, 'states' => $states, 'user'=>$user]);
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
            'user-name' => 'required|string',
            'username' => 'required|string',
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
    public function edit(hospital $hospital,Request $request) {
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
        $user = $request->user();
        $type = ['General Hospital', 'Teaching Hospital', 'Medical Centre', 'Specialist Hospital', 'Clinic', 'Primary Healthcare Centre'];
        $prop = ['Mission', 'Private', 'State Government', 'Federal Government', 'Local Government', 'Charity'];
    
        return view('pages.hospital.edit', compact('hospital', 'type', 'prop', 'states','user'));
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
            'user-name' => 'required|string',
            'username' => 'required|string',
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




// The University of Nigeria Teaching Hospital is a General Hospital in Enugu state that also serves as the Teaching Hospital of the Health students of the University of Nigeria, Nsukka(One of the Best Universities In Nigeria).

// Fun Fact: This Hospital is the First in the to perform a successful open heart surgery