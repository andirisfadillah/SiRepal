<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WajibRetribusi;
use Illuminate\Http\Request;

class WajibRetribusiController extends Controller
{
    public function index(){
        $wajibRetribusi = WajibRetribusi::get();
        return view('wajib-retribusi.index', compact('wajibRetribusi'));
    }

    public function create(){
        return view('wajib-retribusi.create');
    }
    
    public function store(Request $request){
        $request->validate([
            'nama_lengkap' => 'required|max:255',
            'telepon' => 'required|numeric',
            'nik' => 'required|numeric',
            'alamat' => 'required|max:255',
            'kelurahan' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|min:8|max:255'
        ], [
            'nama_lengkap.required' => 'Nama lengkap tidak boleh kosong!',
            'nama_lengkap.max' => 'Nama maksimal 255!',
            'telepon.required' => 'Nomer telepon tidak boleh kosong!',
            'telepon.numeric' => 'Nomer telepon harus di isi angka',
            'nik.required' => 'Nik  tidak boleh kosong!',
            'nik.numeric' => 'Nik  harus di isi angka',
            'alamat.required' => 'Alamat tidak boleh kosong!',
            'alamat.max' => 'Alamat maksimal 255!',
            'kelurahan.required' => 'Kelurahan tidak boleh kosong!',
            'kelurahan.max' => 'Kelurahan maksimal 255!',
            'username.required' => 'Username Wajib Diisi',
            'username.max' => 'username maksimal 255',
            'email.required' => 'Email Wajib Diisi',
            'email.max' => 'username maksimal 255',
            'password.required' => 'password wajib diisi',
            'password.min' => 'Password minimal 8 karakter',
            'password.max' => 'Password maximal255 karakter'

        ]);
        
        $user = new User();
        $user->name = $request->nama_lengkap;
        $user->level = 'wajib';
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        $wajibRetribusi = new WajibRetribusi();
        $wajibRetribusi->id_user = $user->id;
        $wajibRetribusi->nama_lengkap = $request->nama_lengkap;
        $wajibRetribusi->telepon = $request->telepon;
        $wajibRetribusi->nik = $request->nik;
        $wajibRetribusi->alamat = $request->alamat;
        $wajibRetribusi->kelurahan = $request->kelurahan;
        $wajibRetribusi->save();
        
        return redirect()->route('wajib-retribusi.index')->withSuccess('Data berhasil ditambahkan');
    }
    public function edit($id){
        $wajibRetribusi = WajibRetribusi::find($id);
        return view('wajib-retribusi.edit', compact('wajibRetribusi'));
    }
    
    public function update(Request $request, $id){
        $request->validate([
            'nama_lengkap' => 'required|max:255',
            'telepon' => 'required|numeric',
            'nik' => 'required|numeric',
            'alamat' => 'required|max:255',
            'kelurahan' => 'required|max:255',
        ], [
            'nama_lengkap.required' => 'Nama lengkap tidak boleh kosong!',
            'nama_lengkap.max' => 'Nama maksimal 255!',
            'telepon.required' => 'Nomer telepon tidak boleh kosong!',
            'telepon.numeric' => 'Nomer telepon harus di isi angka',
            'nik.required' => 'Nik  tidak boleh kosong!',
            'nik.numeric' => 'Nik  harus di isi angka',
            'alamat.required' => 'Aalamat tidak boleh kosong!',
            'alamat.max' => 'Alamat maksimal 255!',
            'kelurahan.required' => 'kelurahan tidak boleh kosong!',
            'kelurahan.max' => 'Kelurahan maksimal 255!',

            
        ]);

        $wajibRetribusi = WajibRetribusi::find($id);

        $wajibRetribusi->nama_lengkap = $request->nama_lengkap;
        $wajibRetribusi->telepon = $request->telepon;
        $wajibRetribusi->nik = $request->nik;
        $wajibRetribusi->alamat = $request->alamat;
        $wajibRetribusi->kelurahan = $request->kelurahan;
        $wajibRetribusi->save();
        
        return redirect()->route('wajib-retribusi.index')->withSuccess('Data berhasil diedit');
    }

    public function delete($id){
        $wajibRetribusi = WajibRetribusi::find($id);
        $wajibRetribusi->delete();
        
        return redirect()->route('wajib-retribusi.index')->withSuccess('Data berhasil dihapus');
}
}
