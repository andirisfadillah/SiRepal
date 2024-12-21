<?php

namespace App\Http\Controllers;

use App\Models\WajibRetribusi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function updatepassword(Request $request)
    {
        $user = Auth::user(); // Menggunakan facade Auth untuk mendapatkan user saat ini.

        // Validasi input
        $request->validate([
            'password' => 'nullable|confirmed|min:5|max:255',
            'old_password' => 'required_with:password|max:255',
        ], [
            'password.max' => 'Password maksimal 255 karakter!',
            'password.min' => 'Password minimal 5 karakter!',
            'password.confirmed' => 'Password dan konfirmasi password tidak sama!',
            'old_password.required_with' => 'Password lama harus diisi jika ingin mengganti password!',
            'old_password.max' => 'Password lama maksimal 255 karakter!',
        ]);

        // Validasi password lama jika password baru diisi
        if ($request->filled('password')) {
            if (!Hash::check($request->old_password, $user->password)) {
                return back()->withErrors(['old_password' => 'Password lama tidak sesuai!']);
            }
            $user->password = Hash::make($request->password);
        }

        // Update data user
        
        $user->save();
        

        return redirect()->back()->with('success', 'Profil berhasil diubah!');
    }

    public function updateprofile(Request $request ){
        $user = Auth::user();
        $request->validate([
            'nama_lengkap' => 'required|max:255',
            'username' => 'required|max:255',
            'telepon' => 'required|numeric',
            'nik' => 'required|numeric',
            'alamat' => 'required|max:255',
            'kelurahan' => 'required|max:255',
        ], [
            'nama_lengkap.required' => 'Nama lengkap tidak boleh kosong!',
            'nama_lengkap.max' => 'Nama maksimal 255!',
            'username.required' => 'Usernam Tidak Boleh Kosong',
            'username.max' => 'Username maksimal 255!',
            'telepon.required' => 'Nomer telepon tidak boleh kosong!',
            'telepon.numeric' => 'Nomer telepon harus di isi angka',
            'nik.required' => 'Nik  tidak boleh kosong!',
            'nik.numeric' => 'Nik  harus di isi angka',
            'alamat.required' => 'Aalamat tidak boleh kosong!',
            'alamat.max' => 'Alamat maksimal 255!',
            'kelurahan.required' => 'kelurahan tidak boleh kosong!',
            'kelurahan.max' => 'Kelurahan maksimal 255!',

            
        ]);

        /*
        $create = User::create([

                            'name' => 'Hardik Savani',

                            'email' => 'hardik@gmail.com',

                            'password' => '123456'

                        ]);

  

        $id_user = $create->id;
        */

        $wajibRetribusi = WajibRetribusi::where('id_user', $user->id)->first();

       // $wajibRetribusi->id_user =$id_user;
        $wajibRetribusi->nama_lengkap = $request->nama_lengkap;
        $wajibRetribusi->telepon = $request->telepon;
        $wajibRetribusi->nik = $request->nik;
        $wajibRetribusi->alamat = $request->alamat;
        $wajibRetribusi->kelurahan = $request->kelurahan;
        $user->username = $request->username;
        $wajibRetribusi->save();
        $user->save();
        return back()->withSuccess('Data berhasil diedit');
    }
}
