<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\BeritaAcara;
use App\Models\User;
use App\Models\TTD;

class BeritaAcaraController extends Controller
{
    public function submit(Request $request){
        $validateData = $request->validate([
            'nim' => 'required',
            'name' => 'required',
            'tglTugas' => 'required',
            'tugas' => 'required',
            'namaMitra' => 'required',
            'alamatMitra' => 'required',
            'keterangan' => 'required',
            'status' => 'required',
            'jenis' => 'required',
        ]);

        BeritaAcara::create($validateData);
        return redirect('/Mahasiswa/Home/ListSurat');
    }

    public function show(){
        $berita_acara = BeritaAcara::all();
        return view('Admin\ListSurat\listBeritaAcara', compact('berita_acara'));
    }

    public function detail(BeritaAcara $item){
        $ttd = TTD::where('ttd', $item->ttd)->get();
        $pdf = \PDF::loadView('TemplateSurat\beritaAcara', compact('item', 'ttd'));
        return $pdf->download('BeritaAcara.pdf');
        $berita_acara = BeritaAcara::all();
        return view('Admin\ListSurat\listBeritaAcara', compact('berita_acara'));
    }
}
