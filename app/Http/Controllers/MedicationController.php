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
}
