<?php

namespace App\Http\Controllers;

use App\Models\Signage;
use Illuminate\Http\Request;

class SignageController extends Controller
{
    public function index() {
        $signages = Signage::orderBy("created_at", "desc")->get();
        return view('pages.home', ["signages" => $signages]);
    }
    public function show() {
        $signboard = Signages::findOrFail($id)
        return view('pages.home', ["signboard" => $signboard]);
    }
}
