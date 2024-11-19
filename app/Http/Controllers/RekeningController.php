<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Rekening;
use Illuminate\Http\Request;

class RekeningController extends Controller
{
    public function index(){
        $rekening = Rekening::get();
        return view('rekening.index', compact('rekening'));
    }

    public function create(){
        $bank = Bank::get();
        return view('rekening.create', compact('bank'));
    }
    
    public function store(Request $request){
        $request->validate([
            'nama_akun' => 'required',
            'no_rekening' => 'required',
        ], [
            'id_ref_bank.required' => 'Bank tidak boleh kosong!',
            'nama_akun.required' => 'Nama akun tidak boleh kosong!',
            'no_rekening.required' => 'No Rekening tidak boleh kosong!',
        ]);

        $rekening = new Rekening();
        $rekening->id_ref_bank = $request->id_ref_bank;
        $rekening->nama_akun = $request->nama_akun;
        $rekening->no_rekening = $request->no_rekening;
        $rekening->save();
        
        return redirect()->route('rekening.index')->withSuccess('Data berhasil ditambahkan');
    }
    public function edit($id){
        $rekening = Rekening::find($id);
        $bank = Bank::get();
        return view('rekening.edit', compact('rekening', 'bank'));
    }
    
    public function update(Request $request, $id){
        $request->validate([
            'id_ref_bank' => 'required',
            'nama_akun' => 'required',
            'no_rekening' => 'required',
        ], [
            'id_ref_bank.required' => 'Bank tidak boleh kosong!',
            'nama_akun.required' => 'Nama akun tidak boleh kosong!',
            'no_rekening.required' => 'No Rekening tidak boleh kosong!',
        ]);

        $rekening = Rekening::find($id);
        $rekening->id_ref_bank = $request->id_ref_bank;
        $rekening->nama_akun = $request->nama_akun;
        $rekening->no_rekening = $request->no_rekening;
        $rekening->save();
        
        return redirect()->route('rekening.index')->withSuccess('Data berhasil diedit');
    }

    public function delete($id){
        $rekening = Rekening::find($id);
        $rekening->delete();
        
        return redirect()->route('rekening.index')->withSuccess('Data berhasil dihapus');
}
}
