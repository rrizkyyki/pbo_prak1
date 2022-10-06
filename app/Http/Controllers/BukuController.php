<?php

namespace App\Http\Controllers;

use App\Models\Buku_model;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku_model::all();
        return view('menu1', compact(['buku']));
    }

    public function create()
    {
        return view('create.menu1create');
    }
}
