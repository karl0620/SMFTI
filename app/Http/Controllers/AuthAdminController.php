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
use App\Models\SuratIjinKp;
use App\Models\SuratKegiatanMhs;
use App\Models\SuratTugasDosen;

class AuthAdminController extends Controller
{
    public function showFormLogin()
    {
        return view('Admin/loginAdmin');
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
            return redirect()->intended('/Admin/Home');
        }
        else
        {
        return back()->with('error', 'NIK atau Password salah');
        return redirect('/Admin');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/Admin');
    }
}
