<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pengaduan extends Controller
{
    public function tambah_pengaduan(){
        return view('laporan-pengaduan');
    }
}
