<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilDokterController extends Controller
{
    public function index()
    {
        return view('profil_dokter');
    }
}
