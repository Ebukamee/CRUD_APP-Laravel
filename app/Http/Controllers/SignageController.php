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
    public function show($id) {
        $signboard = Signage::findOrFail($id);
        return view('pages.id', ["signboard" => $signboard]);
    }
    public function create() {
        return view("pages.create");
    }
}
