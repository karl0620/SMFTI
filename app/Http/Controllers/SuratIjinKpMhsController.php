<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\SuratIjinKp;

class SuratIjinKpMhsController extends Controller
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

        SuratIjinKp::create($validateData);

        return redirect('/Mahasiswa/Home/ListSuratIzinKp');
    }

    public function showSurat(){
        $data_surat = SuratIjinKp::where('nim', auth()->user()->nim)->get();
        return view('Mahasiswa\listSuratIzinKp', compact('data_surat'));
    }

    public function listAdmin(){
        $data_surat = SuratIjinKp::all();
        return view('Admin\listSuratC', compact('data_surat'));
    }
}
