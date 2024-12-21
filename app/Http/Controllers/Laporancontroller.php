<?php

namespace App\Http\Controllers;

use App\Models\Konfirmasipembayaran;
use Illuminate\Http\Request;

class Laporancontroller extends Controller
{
  public function index(Request $request){
    $pembayaran = Konfirmasipembayaran::where('status', 'Y')->whereBetween('tgl_bayar',[$request->tanggal_awal,$request->tanggal_akhir])->get();
    return view('laporan',compact('pembayaran'));

  }

  
}
