<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Konfirmasipembayaran;
use App\Models\Rekening;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class KonfirmasiController extends Controller
{
    public function create() {

        $bank = Bank::get();
        $rekening = Rekening::get();
    return view('konfirmasipembayaran.create', compact('bank', 'rekening'));
        
    }

    public function store(Request $request){
        $request->validate([

        ]);

        $pembayaran = new Konfirmasipembayaran;
        $pembayaran->id_ref_bank = $request->jenis_bank;
        $pembayaran->id_ms_rekening = $request->no_rekening;
        $pembayaran->id_ms_rekening = $request->no_rekening;
    }
    
    
}
