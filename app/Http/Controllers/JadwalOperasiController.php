<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalOperasiController extends Controller
{
    public function index()
    {
        return view('jadwal_operasi');
    }
}