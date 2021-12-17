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
use App\Models\SuratKeputusanDekan;
use App\Models\DaftarHadir;

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

    public function dashboard(){
        $skdekan = SuratKeputusanDekan::all()->count();
        $daftar_hadir = DaftarHadir::all()->count();
        $suratInd = SuratTugas::where('jenis', 'Individu')->where('status', 'Surat Disetujui')->count();
        $suratKel = SuratTugas::where('jenis', 'Kelompok')->where('status', 'Surat Disetujui')->count();
        $suratKeg = SuratTugas::where('jenis', 'Kegiatan')->where('status', 'Surat Disetujui')->count();
        return view('Admin\homeAdmin', compact('skdekan', 'daftar_hadir', 'suratInd', 'suratKel', 'suratKeg'));
    }
}
