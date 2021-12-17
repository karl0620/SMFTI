<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\DaftarHadir;
use App\Models\User;
use App\Models\TTD;

class DaftarHadirController extends Controller
{
    public function submit(Request $request){
        $nim = implode(",", $request->get('nim'));
        $name = implode(",", $request->get('name'));
        DaftarHadir::create([
            'kegiatan' => $request->kegiatan,
            'tglKegiatan' => $request->tglKegiatan,
            'time' => $request->time,
            'tempat' => $request->tempat,
            'pembicara' => $request->pembicara,
            'nim' => $nim,
            'name' => $name,
            'ttd' => $request->ttd,
        ]);

        return redirect('/Admin/Home/ListSurat/DaftarHadir');
    }

    public function show(){
        $daftar_hadir = DaftarHadir::all();
        return view('Admin\ListSurat\listDaftarHadir', compact('daftar_hadir'));
    }

    public function detail(DaftarHadir $item){
        $nim = explode(",", $item->nim);
        $name = explode(",", $item->name);
        $ttd = TTD::where('ttd', $item->ttd)->get();
        $pdf = \PDF::loadView('TemplateSurat\daftarHadir', compact('item', 'nim', 'name', 'ttd'));
        return $pdf->download('DaftarHadir.pdf');
        $daftar_hadir = DaftarHadir::all();
        return view('Admin\ListSurat\listDaftarHadir', compact('daftar_hadir'));
    }
}
