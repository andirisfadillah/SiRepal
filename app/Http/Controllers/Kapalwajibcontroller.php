<?php

namespace App\Http\Controllers;

use App\Models\Kapalwajib;
use Illuminate\Http\Request;

class Kapalwajibcontroller extends Controller
{
    public function index() {
        $kapalwajib = Kapalwajib::get();
        return view('kapal-wajib.index', compact('kapalwajib'));
    }

    
}
