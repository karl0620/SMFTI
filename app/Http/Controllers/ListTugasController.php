<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\SuratTugas;

class ListTugasController extends Controller
{
    public function showTgsMhs(){
        $suratInd = SuratTugas::where('nim', 'LIKE', auth()->user()->nim.'%')->where('jenis', 'Individu')->get();
        $suratKel = SuratTugas::where('nim', 'LIKE', auth()->user()->nim.'%')->where('jenis', 'Kelompok')->get();
        $suratKeg = SuratTugas::where('nim', 'LIKE', auth()->user()->nim.'%')->where('jenis', 'Kegiatan')->get();
        return view('Mahasiswa\listSurat', compact('suratInd', 'suratKel', 'suratKeg'));
    }

    public function showTgsDsn(){
        $suratInd = SuratTugas::where('nim', 'LIKE', auth()->user()->nim.'%')->where('jenis', 'Individu')->get();
        $suratKel = SuratTugas::where('nim', 'LIKE', auth()->user()->nim.'%')->where('jenis', 'Kelompok')->get();
        $suratKeg = SuratTugas::where('nim', 'LIKE', auth()->user()->nim.'%')->where('jenis', 'Kegiatan')->get();
        return view('Dosen\listSurat', compact('suratInd', 'suratKel', 'suratKeg'));
    }
}
