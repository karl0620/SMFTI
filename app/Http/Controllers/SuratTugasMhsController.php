<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\SuratKegiatanMhs;

class SuratTugasMhsController extends Controller
{
    public function submitSurat(Request $request){
        $validateData = $request->validate([
            'nim' => 'required',
            'name' => 'required',
            'tujuanSurat' => 'required',
            'namaMitra' => 'required',
            'alamatMitra' => 'required',
            'keterangan' => 'required',
            'status' => 'required',
        ]);

        SuratKegiatanMhs::create($validateData);

        return redirect('/Mahasiswa/Home/ListSuratTugas');
    }

    public function showSurat(){
        $data_surat = SuratKegiatanMhs::where('nim', auth()->user()->nim)->get();
        return view('Mahasiswa\listSuratTugasMhs', compact('data_surat'));
    }

    public function listAdmin(){
        $data_surat = SuratKegiatanMhs::all();
        return view('Admin\listSuratB', compact('data_surat'));
    }
}
