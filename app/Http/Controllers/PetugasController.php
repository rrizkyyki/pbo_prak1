<?php

namespace App\Http\Controllers;

use App\Models\Petugas_model;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index()
    {
        $petugas = Petugas_model::all();
        return view('menu2', compact('petugas'));
    }
}
