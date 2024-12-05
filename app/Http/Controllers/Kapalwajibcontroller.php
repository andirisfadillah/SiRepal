<?php

namespace App\Http\Controllers;

use App\Models\Kapal;
use Illuminate\Http\Request;

class Kapalwajibcontroller extends Controller
{
    public function index() {
        $query = Kapal::query();
        
        if(auth()->user()->level === 'wajib'){
            $query->where('id_user', auth()->id());
        }

        $kapal = $query->whereNotNull('konfirmasi_bayar_id')->get();
        return view('kapal-wajib.index', compact('kapal'));
    }

    
}
