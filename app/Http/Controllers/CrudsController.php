<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudsController extends Controller
{
    public function index()
    {
        return view('menu.index');
    }

    public function show($id)
    {
        // Logika untuk menampilkan data dengan ID tertentu
    }
}
