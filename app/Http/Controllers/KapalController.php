<?php

namespace App\Http\Controllers;

use App\Models\JenisKapal;
use App\Models\Kapal;
use Illuminate\Http\Request;

class KapalController extends Controller
{
    public function index(){
        $kapal = Kapal::get();

        return view('kapalku.index', compact('kapal'));
    }
    
    public function create(){
        $jenisKapal = JenisKapal::get();
        return view('kapalku.create', compact('jenisKapal'));
    }
    
    public function store(Request $request){
        $request->validate([
            'nama_kapal' => 'required',
            'ukuran' => 'required',
        ], [
            'nama_kapal.required' => 'Nama tidak boleh kosong!',
            'ukuran.required' => 'Ukuran tidak boleh kosong!',
        ]);

        $kapal = new Kapal();
        $kapal->id_user = auth()->user()->id;
        $kapal->nama_kapal = $request->nama_kapal;
        $kapal->id_jenis_kapal = $request->id_jenis_kapal;
        $kapal->ukuran = $request->ukuran;
        $kapal->save();
        
        return redirect()->route('kapal.index')->withSuccess('Data berhasil ditambahkan');
    }

    public function edit($id){
        $kapal = Kapal::find($id);
        $jenisKapal = JenisKapal::get();
        return view('kapal.edit', compact('kapal','jenisKapal'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama_kapal' => 'required',
            'ukuran' => 'required',
        ], [
            'nama_kapal.required' => 'Nama tidak boleh kosong!',
            'ukuran.required' => 'Ukuran tidak boleh kosong!',
        ]);

        
        $kapal = Kapal::find($id);
        $kapal->nama_kapal = $request->nama_kapal;
        $kapal->id_jenis_kapal = $request->id_jenis_kapal;
        $kapal->ukuran = $request->ukuran;
        $kapal->save();
        
        return redirect()->route('kapal.index')->withSuccess('Data berhasil diedit');
    }

    public function delete($id){
        $kapal = Kapal::find($id);
        $kapal->delete();
        
        return redirect()->route('kapal.index')->withSuccess('Data berhasil dihapus');
    }
}
