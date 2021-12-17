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
use App\Models\SuratTugas;

class AuthDosenController extends Controller
{
    public function showFormLogin()
    {
        return view('loginDosen');
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
            return redirect()->intended('/Dosen/Home');
        }
        else
        {
        return back()->with('error', 'NIK atau Password salah');
        return redirect('/Dosen');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/Dosen');
    }

    public function dashboard(){
        $suratInd = SuratTugas::where('jenis', 'Individu')->where('status', 'Surat Disetujui')->count();
        $suratKel = SuratTugas::where('jenis', 'Kelompok')->where('status', 'Surat Disetujui')->count();
        $suratKeg = SuratTugas::where('jenis', 'Kegiatan')->where('status', 'Surat Disetujui')->count();
        return view('Dosen\homeDosen', compact('suratInd', 'suratKel', 'suratKeg'));
    }
}
