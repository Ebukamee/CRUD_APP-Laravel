<?php

namespace App\Http\Controllers;

use App\Models\Medication;
use Illuminate\Http\Request;

class MedicationController extends Controller
{
    public function index() {
        $signages = medication::orderBy("created_at", "desc")->paginate(12);
        return view('pages.drugs', ["drugs" => $signages]);
    }
}
