<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalPraktikController extends Controller
{
    public function index()
    {
        return view('jadwal_praktik');
    }
}