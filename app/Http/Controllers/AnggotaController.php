<?php

namespace App\Http\Controllers;

use App\Models\Anggota_model;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = Anggota_model::all();
        return view('menu3', compact(['anggota']));
    }
}
