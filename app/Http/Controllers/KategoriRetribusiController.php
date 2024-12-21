<?php

namespace App\Http\Controllers;

use App\Models\KategoriRetribusi;
use Illuminate\Http\Request;

class KategoriRetribusiController extends Controller
{
    public function index(){
        $kategoriRetribusi = KategoriRetribusi::get();

        $isAdmin = auth()->user()->level === 'admin';

        return view('kategori-retribusi.index', compact('kategoriRetribusi', 'isAdmin'));
    }
    
    public function create(){
        return view('kategori-retribusi.create');
    }
    
    public function store(Request $request){
        $request->validate([
            'nama' => 'required|max:255|unique:kategori_retribusis,nama',
        ], [
            'nama.required' => 'Nama tidak boleh kosong!',
            'nama.max' => 'Nama maksimal 255 karakter!',
            'nama.unique' => 'Nama sudah digunakan!',
        ]);
        

        $kategoriRetribusi = new KategoriRetribusi();
        $kategoriRetribusi->nama = $request->nama;
        $kategoriRetribusi->save();
        
        return redirect()->route('kategori-retribusi.index')->withSuccess('Data berhasil ditambahkan');
    }

    public function edit($id){
        $kategoriRetribusi = KategoriRetribusi::find($id);
        
        return view('kategori-retribusi.edit', compact('kategoriRetribusi'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama' => 'required|max:255',
        ], [
            'nama.required' => 'Nama tidak boleh kosong!',
            'nama.max' => 'Nama maksimal 255!'
        ]);

        $kategoriRetribusi = KategoriRetribusi::find($id);
        $kategoriRetribusi->nama = $request->nama;
        $kategoriRetribusi->save();
        
        return redirect()->route('kategori-retribusi.index')->withSuccess('Data berhasil diedit');
    }

    public function delete($id){
        $kategoriRetribusi = KategoriRetribusi::find($id);
        $kategoriRetribusi->delete();
        
        return redirect()->route('kategori-retribusi.index')->withSuccess('Data berhasil dihapus');
    }
}
