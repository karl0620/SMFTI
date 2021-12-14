<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\SuratTugasDosen;
use App\Models\User;

class SuratTugasDosenController extends Controller
{
    public function submitSurat(Request $request){
        $validateData = $request->validate([
            'nim' => 'required',
            'name' => 'required',
            'tglPelaksanaan' => 'required',
            'lksKegiatan' => 'required',
            'namaMitra' => 'required',
            'keterangan' => 'required',
            'status' => 'required',
        ]);

        SuratTugasDosen::create($validateData);

        return redirect('/Dosen/Home/ListSuratTugas');
    }

    public function showSurat(){
        $data_surat = SuratTugasDosen::where('nim', auth()->user()->nim)->get();
        return view('Dosen\listSuratTugasDosen', compact('data_surat'));
    }

    public function listAdmin(){
        $data_surat = SuratTugasDosen::all();
        return view('Admin\listSuratD', compact('data_surat'));
    }

    public function detailAdmin(SuratTugasDosen $item){
        $data_user = User::where('nim', $item->nama)->get();
        return view('Admin\detailSuratD', compact('item', 'data_user'));
    }

    public function deleteDosen(SuratTugasDosen $item){
        SuratTugasDosen::destroy($item->id);
        return redirect('Dosen/Home/ListSuratTugas')->with('success', 'Surat Berhasil Dihapus!');
    }

    public function formEditDosen(SuratTugasDosen $item){
        $data_user = User::where('nim', $item->nama)->get();
        return view('Dosen\editSuratTugas', compact('item', 'data_user'));
    }

    public function editDosen(Request $request, SuratTugasDosen $item){
        $validateData = $request->validate([
            'nim' => 'required',
            'name' => 'required',
            'tglPelaksanaan' => 'required',
            'lksKegiatan' => 'required',
            'namaMitra' => 'required',
            'keterangan' => 'required',
            'status' => 'required',
        ]);

        SuratTugasDosen::where('id', $item->id)->update($validateData);

        return redirect('/Dosen/Home/ListSuratTugas');
    }

    public function prosesSurat(Request $request, SuratTugasDosen $item){
        $validateData = $request->validate([
            'status' => 'required',
        ]);
        SuratTugasDosen::where('id', $item->id)->update($validateData);

        return redirect('/Admin/Home/SuratD');
    }
}
