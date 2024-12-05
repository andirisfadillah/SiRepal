<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Ambil username yang ada di database (case-sensitive check)
        $user = User::where('username', $request->username)->first();
    
        if ($user && Hash::check($request->password, $user->password)) {
            // Login pengguna secara manual
            Auth::login($user);
            return redirect('/dashboard');
        }
    
        return redirect('/login')->with('error', 'Username atau password salah!');
    }
    
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
