<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\SuratTugas;

class SuratTugasController extends Controller
{
    public function submitKelMhs(Request $request){
        $nim = implode(",", $request->get('nim'));
        $name = implode(",", $request->get('name'));
        SuratTugas::create([
            'nim' => $nim,
            'name' => $name,
            'tglTugas' => $request->tglTugas,
            'tugas' => $request->tugas,
            'namaMitra' => $request->namaMitra,
            'alamatMitra' => $request->alamatMitra,
            'keterangan' => $request->keterangan,
            'status' => $request->status,
            'jenis' => $request->jenis,
        ]);

        return redirect('/Mahasiswa/Home/ListSurat');
    }

    public function submitKelDsn(Request $request){
        $nim = implode(",", $request->get('nim'));
        $name = implode(",", $request->get('name'));
        SuratTugas::create([
            'nim' => $nim,
            'name' => $name,
            'tglTugas' => $request->tglTugas,
            'tugas' => $request->tugas,
            'namaMitra' => $request->namaMitra,
            'alamatMitra' => $request->alamatMitra,
            'keterangan' => $request->keterangan,
            'status' => $request->status,
            'jenis' => $request->jenis,
        ]);

        return redirect('/Mahasiswa/Home/ListSurat');
    }

    public function submitKelAdm(Request $request){
        $nim = implode(",", $request->get('nim'));
        $name = implode(",", $request->get('name'));
        SuratTugas::create([
            'nim' => $nim,
            'name' => $name,
            'tglTugas' => $request->tglTugas,
            'tugas' => $request->tugas,
            'namaMitra' => $request->namaMitra,
            'alamatMitra' => $request->alamatMitra,
            'keterangan' => $request->keterangan,
            'status' => $request->status,
            'jenis' => $request->jenis,
        ]);

        return redirect('/Mahasiswa/Home/ListSurat');
    }

    public function submitIndMhs(Request $request){
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

        SuratTugas::create($validateData);
        return redirect('/Mahasiswa/Home/ListSurat');
    }

    public function submitIndDsn(Request $request){
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

        SuratTugas::create($validateData);
        return redirect('/Dosen/Home/ListSurat');
    }

    public function submitIndAdm(Request $request){
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

        SuratTugas::create($validateData);
        return redirect('/Dosen/Home/ListSurat');
    }

    public function listAdmin(){
        $data_surat = SuratTugas::all();
        return view('Admin\listSuratB', compact('data_surat'));
    }

    public function deleteMhs(SuratTugas $item){
        SuratTugas::destroy($item->id);
        return redirect('Mahasiswa/Home/ListSurat')->with('success', 'Surat Berhasil Dihapus!');
    }

    public function deleteDsn(SuratTugas $item){
        SuratTugas::destroy($item->id);
        return redirect('Dosen/Home/ListSurat')->with('success', 'Surat Berhasil Dihapus!');
    }
}
