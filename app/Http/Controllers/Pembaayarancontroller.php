<?php

namespace App\Http\Controllers;

use App\Models\Konfirmasipembayaran;
use Illuminate\Http\Request;

class Pembaayarancontroller extends Controller
{
    public function index(){
     $Konfirmasipembayaran = Konfirmasipembayaran::get();
     $isAdmin = auth()->user()->level === 'admin';
      return view('pembayaran-retribusi', compact('Konfirmasipembayaran', 'isAdmin'));  
    }


}
