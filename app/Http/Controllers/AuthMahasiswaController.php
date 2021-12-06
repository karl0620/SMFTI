<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use App\Models\User;

class AuthMahasiswaController extends Controller
{
    public function showFormLogin()
    {
        return view('loginMhs');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'nim'=> 'required',
            'password' => 'required',
            'status' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/Mahasiswa/Home');
        }
        else
        {
        return back()->with('error', 'NIM atau Password salah');
        return redirect('/Mahasiswa');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/Mahasiswa');
    }

}
